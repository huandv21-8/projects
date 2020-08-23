<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Hash;
use Auth;
use App\User;
use App\position;
use App\Http\Requests\checkAddUserAdmin;

class usersController extends Controller
{

    public function __construct()
    {
       
        //kiem tra trạng thái user còn hoạt động ko
        $this->middleware('StatusUser');
        $this->middleware('CheckEmployee');
        
    }
    public function index(Request $request)
    {
        //check admin hay usser de show menu
        
       
        // dd($position_current);
        $userlist = DB::table('users')
            ->leftJoin('position', 'position.id_user', '=', 'users.id')
            ->leftJoin('roles', 'roles.id_roles', '=', 'position.id_roles')
            ->where('users.status',1)
            ->select('users.*', 'roles.name_roles')
            ->paginate(5);

        // dd($userlist);
        return view('admin.Users.showusers')->with([
            'index' => 1,
            'userlist' => $userlist
        ]);
    }
    public function edit_user(Request $request)
    {
      

        $rolesList = DB::table('roles')->select('name_roles')
        ->get();
        $test = DB::table('position')
        ->where('position.id_user',$request->id)
        ->get();
        if(count($test)==0){
            $userlist = DB::table('users')
            ->where('users.id', $request->id)
            ->first();
            return view('admin.Users.edit_user')->with([
                'userlist' => $userlist,
                'rolesList' => $rolesList,
                // 'position_current'=>$position_current
            ]);
        }else{
            $userlist = DB::table('users')
            ->leftJoin('position', 'position.id_user', '=', 'users.id')
            ->leftJoin('roles', 'roles.id_roles', '=', 'position.id_roles')
            ->where('users.id', $request->id)
            ->first();
            return view('admin.Users.edit_user')->with([
                'userlist' => $userlist,
                'rolesList' => $rolesList
                
            ]);
        }

        
        
       
        
    }
    public function updateUser(Request $request)
    {
        
        $idUser = $request->id;

        $roles = $request->roles;
        if ($roles[0] == 'admin') {
            $id_roles = 1;
        } else if ($roles[0] == 'customer') {
            $id_roles = 2;
        } else {
            $id_roles = 3;
        }

        $pass = Hash::make($request->password);
        
        
        DB::table('users')->where('id', $request->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'identity_cart' => $request->identity_cart,
                'gender' => $request->gender,
                'phone' => $request->phone,
                'password' => $pass,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

        //check xem id_user co ton tai trong positon chua
        $test = DB::table('position')
        ->where('position.id_user',$request->id)
        ->get();
        if( count($test) >=1){
            DB::table('position')->where('id_user', $request->id)
            ->update([
                'id_roles' => $id_roles,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }else{
            DB::table('position')
            ->insert([
                'id_roles' => $id_roles,
                'id_user'=>$idUser,
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
     
        
        return redirect()->route('show_user');

    }
    public function viewUsers(Request $request)
    {
       

        $userlist = DB::table('users')
            ->leftJoin('position', 'position.id_user', '=', 'users.id')
            ->leftJoin('roles', 'roles.id_roles', '=', 'position.id_roles')
            ->where('users.id', $request->id)
            ->first();

        return view('admin.Users.viewUser')->with([
            'index' => 1,
            'userlist' => $userlist
        ]);
    }
    // use App\Http\Requests\TestRequest;
    public function addUser(Request $request)
    {
        
        
        $rolesList = DB::table('roles')->select('name_roles')
        ->get();
        return view('admin.Users.createUser')->with([
            'rolesList'=>$rolesList
            ]);
    }

    public function insertUser(checkAddUserAdmin $request)
    {
        $pass = Hash::make($request->password);

        $roles = $request->roles;

        if ($roles == 'admin') {
            $id_roles = 1;
        } else if ($roles === 'customer') {
            
            $id_roles = 2;
        } else {
            $id_roles = 3;
        }

    //   dd($id_roles);
        
        $User   = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'age'=>$request->age,
            'identity_cart' => $request->identity_cart,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'password' => $pass,
            'wards'=>$request->wards,
            'district'=>$request->district,
            'city'=>$request->city,
            'status'=>1,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        $position   = position::create([
            'id_user'=> $User->id,
            'id_roles'=>$id_roles,
        ]);
        return redirect()->route('show_user');
    }
    
    public function deletedUser(Request $request)
    {
        $user = User::find($request->id);
        $user->status = 0;
        $user->save();
    }
    
}
