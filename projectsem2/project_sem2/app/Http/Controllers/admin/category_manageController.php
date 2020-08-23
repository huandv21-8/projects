<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Dotenv\Validator as DotenvValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\checkCategory;
use App\Http\Requests\checkProduct;




class category_manageController extends Controller
{
    //phần danh mục
    public function categoryList(Request $request)
    {
        $categoryList = DB::table('category')
            ->get();

        return view('admin.category_manage.category', ['categoryList' => $categoryList]);
    }

    public function view_category(Request $request)
    {
        $view = DB::table('category')
            ->leftJoin('users', 'category.id_user', '=', 'users.id')
            ->where('users.id', $request->id_user)
            ->where('category.id_category', $request->id_category)
            ->select('category.*', 'users.*')
            ->get();
        return view('admin.category_manage.category_view', ['view' => $view]);
    }

    public function add_category1(Request $request)
    {
        $name_people_add = DB::table('users')
            ->where('id', auth()->id())
            ->limit(1)
            ->get();

        return view(
            'admin.category_manage.category_add',
            ['name_people_add' => $name_people_add[0]->name]
        );
    }

    public function add_category2(checkCategory $request)
    {
        DB::table('category')
            ->insert([
                'id_user' => auth()->id(),
                'name_category' => $request->name_category,
                'created_at' => $request->date_add
            ]);

        return redirect()->route('categoryList');
    }

    public function edit_category(Request $request, $id_category)
    {

        $name_people_add = DB::table('users')
            ->where('id', auth()->id())
            ->limit(1)
            ->get();

        $edit = DB::table('category')
            ->where('category.id_category', $id_category)
            ->select('category.*')
            ->get();

        // dd($edit);
        return view('admin.category_manage.category_edit', [
            'edit' => $edit,
            'name_people_add' => $name_people_add[0]->name
        ]);
    }

    public function edit_category2(checkCategory $request)
    {
        DB::table('category')->where('id_category', $request->id_category)
            ->update([
                'id_user' => auth()->id(),
                'name_category' => $request->name_category,
                'updated_at' =>  date('Y-m-d H:i:s')
            ]);

        return redirect()->route('categoryList');
    }

    public function delete_category($id_category)
    {
        $productList = DB::table('product')
            ->where('id_category', $id_category)
            ->get();

        if (count($productList) == 0) {
            DB::table('category')->where('id_category', $id_category)
                ->delete();
            return redirect()->route('categoryList');
        } else {
            return redirect()->route('categoryList');
        }
    }


    //phần sản phẩm
    public function productList(Request $request)
    {
        $productList = DB::table('product')
        ->where('status',0)
            ->select('product.*')
        
            ->get();

        return view('admin.category_manage.product', ['productList' => $productList]);
    }

    public function view_product(Request $request)
    {

        $view = DB::table('product')
            ->leftJoin('users', 'product.id_user', '=', 'users.id')
            ->leftJoin('category', 'category.id_category', '=', 'product.id_category')
            ->where('product.id_user', $request->id_user)
            ->where('product.id_category', $request->id_category)
            ->where('product.id_product', $request->id_product)
            ->select('product.*', 'users.name', 'category.name_category')
            ->get();

        return view('admin.category_manage.product_view', ['view' => $view]);
    }


    public function add_product()
    {
        $name_people_add = DB::table('users')
            ->where('id', auth()->id())
            ->limit(1)
            ->get();

        $categoryList = DB::table('category')
            ->get();

        return view(
            'admin.category_manage.product_add',
            [
                'name_people_add' => $name_people_add[0]->name,
                'categoryList' => $categoryList
            ]
        );
    }

    public function add_product2(checkProduct $request)
    {
        // dd('chay vao day');
        DB::table('product')
            ->insert([
                'id_user' => auth()->id(),
                'id_category' => $request->id_category,
                'name_product' => $request->name_product,
                'describe' => $request->describe,
                'price' => $request->price,
                'image' => $request->image,
                'created_at' => date('Y-m-d H:i:s')
            ]);

        return redirect()->route('productList');
    }

    public function edit_product(Request $request)
    {
        $name_people_add = DB::table('users')
            ->where('id', auth()->id())
            ->limit(1)
            ->get();

        $category = DB::table('category')
            // ->where('category.id_category', $request->id_category)
            ->get();

        $edit = DB::table('product')
            ->where('id_product', $request->id_product)
            ->get();

        // dd($edit);
        return view('admin.category_manage.product_edit', [
            'edit' => $edit,
            'name_people_add' => $name_people_add[0]->name,
            'category' => $category
        ]);


        // dd($request->id_category);
    }

    public function edit_product2(checkProduct $request)
    {

        DB::table('product')
            ->where('id_product', $request->id_product)
            ->update([
                'id_user' => auth()->id(),
                'id_category' => $request->id_category,
                'name_product' => $request->name_product,
                'describe' => $request->describe,
                'price' => $request->price,
                'image' => $request->image,
                'created_at' => date('Y-m-d H:i:s')
            ]);

        return redirect()->route('productList');
    }

    public function delete_product(Request $request)
    {
        // DB::table('image_product')->where('id_product', $request->id_product)
        //     ->delete();

        DB::table('product')
        ->where('id_product', $request->id_product)
        ->update([
               'status'=>1
            ]);

        return redirect()->route('productList');
    }
}
