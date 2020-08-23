<?php

namespace App\Http\Controllers\layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\order;
use App\order_detail;
use App\Http\Requests\TestRequest;
use Illuminate\Support\Facades\DB as FacadesDB;

class checkOutController extends Controller
{
    //a mún cho nòa vào chỗ này nè
    public function viewCheckout(Request $request)
    {

        // dd('test');
        if (Auth::check()) {

           
                // chen lay usser dang nhap
                $name_userlogin = DB::table('users')
                ->where('id',auth()->id())->select('users.*')
                ->first();

                if( isset($name_userlogin)){ 
                    return view('super-market.pages.checkout.checkout')->with([
                        'name_userlogin'=>$name_userlogin
                    ]);         
                }else{
                    return view('super-market.pages.checkout.checkout');
                }
        }
        else{
            return redirect('home');
        }
   
    }

    public function payment(Request $request)
    {
        $data = $request->data;
		if ($data == null || $data == '') {
			return;
		}
        $data       = json_decode($data, true);
        $idCustomer = $request->id_customer;
        // $order = DB::table('order')->insert([
            $order      = order::create([
            'id_customer' => $idCustomer,
            'total_money' => $request->total,
            'status'      =>'Pending',   
            'wards'       =>$request->Address,
            'district'    =>$request->District,
            'city'       =>$request->City,
            'created_at'  => date('Y-m-d H:i:s'),
            'updated_at'  => date('Y-m-d H:i:s')
        ]);
        foreach ($data as $item) {
			DB::table('order_detail')->insert([
					'id_order'   => $order->id_order,
					'id_product' => $item['id'],
					'amount'        => $item['num'],
					'price'      => $item['price'],
					'total_money'      => $item['price']*$item['num'],
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				]);
        }
    

        echo 'Set Order Success';
        
        // return view('super-market.pages.checkout.infor_user');
    }
    public function deleted_order(Request $request)
    {
        // DB::table('order_detail')->where('id_order',$request->id_order)
        // ->delete();
        // DB::table('order')->where('id_order',$request->id_order)->deleted();
       $find= order_detail::where('id_order',$request->id_order)->delete();
        
        
         order::find($request->id_order)->delete();
        
        echo 'Cancel Order Success';
    }
}
