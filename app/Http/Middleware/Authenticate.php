<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
//        if (Auth::guard($guard)->guest()) {
//            if ($request->ajax() || $request->wantsJson()) {
//                return response('Unauthorized.', 401);
//            } else {
//                return redirect()->guest('login');
//            }
//        }

        if(!isset($_SESSION)){
            session_start();
        }

        if (isset($_SESSION['ifLoggedIn']) && $_SESSION['ifLoggedIn']=='y'){
            return $next($request);
        }else{
            return response('对不起，请先<a href="/login">登录</a>以后再操作。', 401);
        }

    }
}
