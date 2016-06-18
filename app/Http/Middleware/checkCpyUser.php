<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;

class checkCpyUser
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
        if(!isset($_SESSION)){
            session_start();
        }
        if ($_SESSION['privilege'] != "staff" && $_SESSION['privilege'] != "admin"){
            return Redirect::to('/cpyUserError');
        }
        else
            return $next($request);
    }
}
