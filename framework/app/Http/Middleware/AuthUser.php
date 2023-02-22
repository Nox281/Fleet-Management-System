<?php


namespace App\Http\Middleware;

use Auth;
use Closure;

class AuthUser
{

    public function handle($request, Closure $next)
    {
        if (Auth::user() && Auth::user()->user_type == "C") {
            return $next($request);
        }

        return redirect("/#login");
    }
}
