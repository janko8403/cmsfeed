<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckAdminEditorPermission
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
        if ( ! Auth::check() || ! is_admin() && !is_editor() )
        {
            return redirect('/access-denied');
        }

        return $next($request);
    }
}
