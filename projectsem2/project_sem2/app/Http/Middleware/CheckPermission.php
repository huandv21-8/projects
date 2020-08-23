<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use App\roles;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission = null)
    {

        $userlist = DB::table('users')
            ->leftJoin('position', 'position.id_user', '=', 'users.id')
            ->leftJoin('roles', 'roles.id_roles', '=', 'position.id_roles')
            ->where('users.id', auth()->id())
            
            ->select('roles.id_roles','users.status')
            ->get();


        if ($userlist[0]->id_roles == 1 || $userlist[0]->id_roles == 3) {
               


                return $next($request);
        }
        return redirect('index');
        // var_dump($userlist);
        // die();
    }
}
