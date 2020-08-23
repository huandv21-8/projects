<?php

namespace App\Http\Controllers\layout;

use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TestRequest;
use App\product;


class homeController extends Controller
{
    public function index()
    {

        $categoryList = DB::table('category')->get();
        $productList = DB::table('product')
            ->where('status', 0)
            ->inRandomOrder()
            ->limit(8)
            ->get();


        $latest_product = DB::table('product')
            ->orderBy('created_at', 'DESC')
            ->where('status', 0)
            ->limit(6)
            ->get();

        $rated_product = DB::table('product')
            ->orderBy('price', 'DESC')
            ->where('status', 0)
            ->select('product.*')
            ->limit(6)
            ->get();
        // dd($rated_product);
        $sold_product = DB::table('product')
            ->orderBy('Inventory_sold', 'DESC')
            ->where('status', 0)
            ->select('product.*')
            ->limit(6)
            ->get();


        $name_userlogin = DB::table('users')
            ->where('id', auth()->id())->select('users.name')
            ->first();

        if (isset($name_userlogin)) {

            return view('super-market.pages.home.index')->with([
                'name_userlogin' => $name_userlogin,
                'categoryList' => $categoryList,
                'productList' => $productList,
                'latest_product' => $latest_product,
                'rated_product' => $rated_product,
                'sold_product' => $sold_product,
            ]);
        } else {
            // dd('chay vao 2');
            return view('super-market.pages.home.index')->with([
                'categoryList' => $categoryList,
                'productList' => $productList,
                'latest_product' => $latest_product,
                'rated_product' => $rated_product,
                'sold_product' => $sold_product,
            ]);
        }
    }

    public function checkQuantityProduct(Request $request)
    {
        
    $product = product::where('id_product',$request->id)->first();
        echo $product->Inventory_number;
        return;
    }

    public function shoppingCart(Request $request)
    {


        if (isset($request->id)) {
            // dd($request->id);
            $count = DB::table('product')
                ->where('id_product', $request->id)
                ->select('product.Inventory_number')->get();
            // $count[0];
            return $count[0]->Inventory_number;
        } else {


            $name_userlogin = DB::table('users')
                ->where('id', auth()->id())->select('users.name')
                ->first();
            if (isset($name_userlogin)) {

                $categoryList = DB::table('category')->get();
                return view('super-market.pages.shop.shopcart')->with([
                    'name_userlogin' => $name_userlogin,
                    'categoryList' => $categoryList,
                    'count' => 6
                ]);
            } else {
                $categoryList = DB::table('category')->get();
                return view('super-market.pages.shop.shopcart')->with([
                    'categoryList' => $categoryList,

                ]);
            }
        }
    }

    public function productDetail($id_product)
    {
        $product = DB::table('product')
            ->where('id_product', $id_product)
            ->get();

        $image_product = DB::table('image_product')
            ->leftJoin('product', 'product.id_product', '=', 'image_product.id_product')
            ->where('image_product.id_product', $id_product)
            ->select('image_product.*')
            ->get();

        foreach ($product as $value) {
            $id_category = $value->id_category;
        }

        $Related_product = DB::table('product')
            ->where('id_category', $id_category)
            ->paginate(8);



        // chen lay usser dang nhap
        $name_userlogin = DB::table('users')
            ->where('id', auth()->id())->select('users.name')
            ->first();
        if (isset($name_userlogin)) {
            return view('super-market.pages.product-detail.product-detail')->with([
                'product' => $product,
                'image_product' => $image_product,
                'Related_product' => $Related_product,
                'name_userlogin' => $name_userlogin,
            ]);
        } else {
            return view('super-market.pages.product-detail.product-detail')->with([
                'product' => $product,
                'image_product' => $image_product,
                'Related_product' => $Related_product,

            ]);
        }
    }

    public function ViewShopGrid(Request $request)
    {
        $productSale = DB::table('product')
            ->leftJoin('category', 'category.id_category', '=', 'product.id_category')
            ->where('status', 0)
            ->inRandomOrder()
            ->select('category.name_category', 'product.*')
            ->limit(9)
            ->get();

        $product = DB::table('product')
            ->where('status', 0)
            ->paginate(12);

        $latest_product = DB::table('product')
            ->orderBy('created_at', 'DESC')
            ->where('status', 0)
            ->limit(6)
            ->get();

        // chen lay usser dang nhap
        $name_userlogin = DB::table('users')
            ->where('id', auth()->id())->select('users.name')
            ->first();

        if (isset($name_userlogin)) {
            return view('super-market.pages.shop.shop', [
                'productSale' => $productSale,
                'product' => $product,
                'latest_product' => $latest_product,
                'name_userlogin' => $name_userlogin,
            ]);
        } else {
            return view('super-market.pages.shop.shop', [
                'productSale' => $productSale,
                'product' => $product,
                'latest_product' => $latest_product,

            ]);
        }
    }

    public function categoryDetail(Request $request, $id_category)
    {
        $productSale = DB::table('product')
            ->leftJoin('category', 'category.id_category', '=', 'product.id_category')
            ->inRandomOrder()
            ->select('category.name_category', 'product.*')
            ->limit(9)
            ->get();

        $product = DB::table('product')
            ->where('id_category', $id_category)
            ->paginate(12);

        $latest_product = DB::table('product')
            ->where('id_category', $id_category)
            ->where('created_at', '>', date('Y-m-d', strtotime("-4 days")))
            ->limit(6)
            ->get();

        // chen lay usser dang nhap
        $name_userlogin = DB::table('users')
            ->where('id', auth()->id())->select('users.name')
            ->first();

        if (isset($name_userlogin)) {
            return view('super-market.pages.shop.category_detail', [
                'productSale' => $productSale,
                'product' => $product,
                'latest_product' => $latest_product,
                'name_userlogin' => $name_userlogin,
            ]);
        } else {
            return view('super-market.pages.shop.shop', [
                'productSale' => $productSale,
                'product' => $product,
                'latest_product' => $latest_product,

            ]);
        }
    }

    // thong tin user
    public function infor_user(Request $request)
    {

        $orderList = DB::table('order')
            ->where('order.id_customer', auth()->id())
            ->select('order.*')->get();


        $name_userlogin = DB::table('users')
            ->where('id', auth()->id())->select('users.*')
            ->first();
        return view('super-market.pages.checkout.infor_user')->with([
            'name_userlogin' => $name_userlogin,
            'orderList' => $orderList
        ]);
    }
    //update user cua ng dùng
    public function updateInformation_user(TestRequest $request)
    {
        $id_user = Auth::user()->id;

        DB::table('users')->where('id', $id_user)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'wards' => $request->address,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        return redirect('index');
    }

    //search
    function getSearchAjax(Request $request)
    {
        // dd($request->get('query'));

        if ($request->get('query')) {
            $query = $request->get('query');
            $data = DB::table('product')
                ->where('status', 0)
                ->where('name_product', 'LIKE', "%{$query}%")
                ->get();
            // dd($data);
            $output = '<ul class="dropdown-menu" style="display:block; margin-left: 200px; min-width: 26rem;    top: 50px;">
            <table >
           
            ';
            foreach ($data as $row) {
                $output .= '
                <tr>
               <th style="padding-left:30px"> <img style="width:50px" src="' . $row->image . '"></img></th>
               <th style="padding-left:30px"><a class="search_product" href="/index/productDetail/' . $row->id_product . '">' . $row->name_product . '</a> ($' . number_format($row->price) . ')</th>
              </tr>
               ';
            }
            $output .= '
        </table>
        </ul>';



            echo $output;
            //    dd( $output);

            // return response()->json($students); 
        }
    }
}
