<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use DB;
use Auth;

class StatusUser
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
        
        $status_user= Auth::user()->status;
        if($status_user == 1){
            //status ==1 là( vẫn hoạt động khác 1 là đã xóa
            return $next($request);
        }
        //trả về trang logout
        
        Auth::logout();
         return redirect()->route('index');
        
        
      
        
    }
}
