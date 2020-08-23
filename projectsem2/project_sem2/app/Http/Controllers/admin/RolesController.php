<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('CheckEmployee');

        
    }
    public function showRoles(Request $request)
    {
        $rolesList = DB::table('roles')->paginate(3);

        return view('admin.Roles.showRoles')->with([
            'index' => 1,
            'rolesList' => $rolesList
        ]);
    }
    public function updateRoles(Request $request)
    {
        $rolesList = DB::table('roles')->where('roles.id_roles', $request->id)->first();
        return view('admin.Roles.updateRoles')->with(['rolesList' => $rolesList]);
    }
    public function receive_update(Request $request)
    {
        DB::table('roles')->where('id_roles', $request->id)
            ->update([
                'name_roles' => $request->nameRoles,
                'created_at' => $request->createdAt,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        return redirect()->route('show_Roles');
    }
    public function addRoles(Request $request)
    {

        return view('admin.Roles.addRoles');
    }
    public function insertRoles(Request $request)
    {
        DB::table('roles')->insert([
            'name_roles' => $request->name_roles,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        return redirect()->route('show_Roles');
    }

    public function deletedRoles(Request $request)
    {

        DB::table('roles')->where('id_roles', $request->id)->delete();
        //   return redirect()->route('show_Roles');
        //   echo 'da nhan dc id = '.$request->id;
    }
}
