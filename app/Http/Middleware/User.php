<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }
         //Role 1 is admin
        if(Auth::user()->role==1){
            return redirect()->route('admin');
        }
        //Role 2 is Finance
        if(Auth::user()->role==2){
            return redirect()->route('finance');
        }
        //Role 3 is user
        if(Auth::user()->role==3){
            return $next($request);
        }
    }
}
