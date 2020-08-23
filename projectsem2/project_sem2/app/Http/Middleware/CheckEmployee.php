<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use DB;

class CheckEmployee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        $id_current = Auth::user()->id;
        $position_current = DB::table('position')
        ->where('position.id_user',$id_current)
        ->select('position.id_roles')->first();

       // dd($position_current->id_roles);
       
      
        if ($position_current->id_roles != 3) {
          
           
        return $next($request);
            
        }
      

        return redirect()->route('categoryList');
    }
}

