<?php


namespace App\Http\Middleware;

use App;
use Closure;
use ayoubgr;

class CheckFrontEnable
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
        if (ayoubgr::frontend('enable') == 1) {
            return $next($request);
        } else {
            return redirect('admin');
        }
    }
}
