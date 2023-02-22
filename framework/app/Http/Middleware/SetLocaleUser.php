<?php


namespace App\Http\Middleware;

use App;
use Auth;
use Closure;
use ayoubgr;

class SetLocaleUser
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
        if (Auth::user() && Auth::user()->user_type == "C") {
            App::setLocale(ayoubgr::frontend('language'));
        } else {
            App::setLocale(ayoubgr::frontend('language'));
        }
        return $next($request);
    }
}
