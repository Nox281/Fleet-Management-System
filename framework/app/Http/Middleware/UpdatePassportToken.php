<?php


namespace App\Http\Middleware;

use Auth;
use Closure;

class UpdatePassportToken
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
        if (Auth::check()) {
            foreach (Auth::user()->tokens->where('revoked', 0) as $token) {
                if (strtotime($token->expires_at) > strtotime("now")) {
                    // $token->expires_at = \Carbon\Carbon::now()->add(120, 'minutes');
                    // $token->save();
                }
            }
            return $next($request);
        }
        return response()->json(['error' => 'Unauthenticated.'], 401);
    }
}
