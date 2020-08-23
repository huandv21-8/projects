<?php

namespace App\Http\Controllers\layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;

class contactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function contact(Request $request)
    {
        $name_userlogin = DB::table('users')
            ->where('id', auth()->id())->select('users.*')
            ->first();
        return view('super-market.pages.contact.contact')->with([
            'name_userlogin'=>$name_userlogin
        ]);
    }
    public function recieve_content(Request $request)
    {
       
        $id_user = Auth::user()->id;
        DB::table('contact')->insert([
            'content_contact'=> $request->content_contact,
            'id_user'=>$id_user,
            'created_at' => date('Y-m-d H:i:s'),
			'updated_at' => date('Y-m-d H:i:s')
        ]);
        return redirect('index');
    }
}
