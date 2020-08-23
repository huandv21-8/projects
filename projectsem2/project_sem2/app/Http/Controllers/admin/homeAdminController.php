<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\order;
use App\product;
use App\category;
use App\User;
class homeAdminController extends Controller
{
    public function __construct()
    {
        //kiem tra trạng thái user còn hoạt động ko
        $this->middleware('StatusUser');
        $this->middleware('CheckEmployee');
        
    }
    public function homeAdmin(Request $request)
    {

    $countOrder = order::count();
    $countProduct = product::count();
    $countCategory = category::count();

    $orderList = order::all();
    $userList = User::all();
    
    //check user la customer
    
$roles_user = DB::table('users')
->leftJoin('position', 'position.id_user', '=', 'users.id')
->where('position.id_roles',2)
->select('users.*', 'position.id_roles')->get();

        return view('admin.Users.homeadmin')->with([
            'index'=>1,
            'countOrder'=>$countOrder,
            'countProduct'=>$countProduct,
            'countCategory'=>$countCategory,
            'orderList'=>$orderList,
            'userList'=>$userList,
            'roles_user'=>$roles_user
        ]);
    }
}
