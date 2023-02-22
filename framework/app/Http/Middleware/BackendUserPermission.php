<?php


namespace App\Http\Middleware;

use Auth;
use Closure;

class BackendUserPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $m)
    {
        if ($m != "S") {

            if (Auth::user()->user_type == "S" || Auth::user()->user_type == "O") {
                $modules = unserialize(Auth::user()->getMeta('module'));

                if ($m == 0 && Auth::user()->user_type == "S") {
                    return $next($request);
                }
                if (!in_array($m, $modules)) {
                    return response()->json(['error' => 'Unauthenticated.'], 401);

                }
            } else if (Auth::user()->user_type == "D") {
                if (!in_array($m, [8, "D"])) {
                    return response()->json(['error' => 'Unauthenticated.'], 401);
                }
            } else if (Auth::user()->user_type == "C") {
                if (!in_array($m, [3, "C"])) {
                    return response()->json(['error' => 'Unauthenticated.'], 401);
                }
            }
        }
        if ($m == "S") {
            if (Auth::user()->user_type != "S") {
                return response()->json(['error' => 'Unauthenticated.'], 401);
            }
        }

        return $next($request);
    }
}
