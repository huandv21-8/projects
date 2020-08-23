<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkPermission');
    }
    public function admin_order(Request $request)
    {
        $orderList = DB::table('order')
            // ->leftJoin('users', 'users.id', '=', 'order.id_employee')
            // ->leftJoin('users', 'users.id', '=', 'order.id_customer')
            // ->select('')
            ->get();
        $userList = DB::table('users')->get();
        // dd($orderList);
        // var_dump($orderList);
        return view('admin.order.admin_order')->with([
            'index' => 1,
            'orderList' => $orderList,
            'userList' => $userList
        ]);
    }
    public function orderDetail(Request $request)
    {
        $orderList = DB::table('order_detail')
            ->leftJoin('product', 'product.id_product', '=', 'order_detail.id_product')
            ->where('id_order', $request->id_order)
            ->select('order_detail.*', 'product.name_product')
            ->get();


        $status = DB::table('order')->where('id_order', $request->id_order)
            ->select('order.status')->first();

        return view('admin.order.order_detail')->with([
            'index' => 1,
            'orderList' => $orderList,
            'status' => $status,
            'id_order' => $request->id_order
        ]);
    }
    public function update_orderDetail(Request $request)
    {
        $id_employee = auth()->id();
        DB::table('order')->where('id_order', $request->id_order)
            ->update([
                'id_employee' => $id_employee,
                'status' => $request->status,
            ]);
        $soluongconlai = $soluongdaban = 0;
        if ($request->status == 'Success') {
            $productList = DB::table('order_detail')
                ->where('id_order', $request->id_order)
                ->get();
            foreach ($productList as $value) {
                $product = DB::table('order_detail')
                    ->where('id_product', $value->id_product)
                    ->get();

                foreach ($product as $item) {
                    $id_product = $item->id_product;
                    $amount = $item->amount;

                    $soluongtonkho =  DB::table('product')
                        ->where('id_product', $id_product)
                        ->get();

                    foreach ($soluongtonkho as $a) {
                        $soluongconlai = $a->Inventory_number - $amount;
                        if ($soluongconlai <= 0) {
                            $soluongconlai = 0;
                        }

                        $soluongdaban = $a->Inventory_sold + $amount;
                    }

                    DB::table('product')->where('id_product', $id_product)
                        ->update([
                            'Inventory_number' => $soluongconlai,
                            'Inventory_sold' => $soluongdaban,
                        ]);

                    if ($soluongconlai <= 0) {

                        DB::table('product')->where('id_product', $id_product)
                            ->update([
                                'status' => 1,
                            ]);
                    }
                }
            }
        }

        echo 'Order Approval Success';
    }
}
