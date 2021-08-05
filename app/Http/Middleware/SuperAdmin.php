<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperAdmin
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
        if(!session()->has('LoggedUser') && ($request->path() !='admin_login' && $request->path() !='admin_register' )){
            return redirect('admin_login')->with('fail','You must be logged in');
        }

        if(session()->has('LoggedUser') && ($request->path() == 'admin_login' || $request->path() == 'admin_register' ) ){
            return back();
        }
        if(session('role')!='1'){
            return back()->with('error','Access denied!');
        }
        
        return $next($request)->header('Cache-Control','no-cache, no-store, max-age=0, must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','Sat 01 Jan 1990 00:00:00 GMT');;
    }
}