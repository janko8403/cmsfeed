<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdminPermission
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
        if ( ! Auth::check() || ! is_admin() )
        {
            return redirect('/access-denied');
        }

        return $next($request);
    }
}
