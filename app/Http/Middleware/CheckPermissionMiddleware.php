<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermissionMiddleware
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
        if(!check_user_permissions($request)){
            abort(403, "Access denied. You have no rights for entering this section.");
        }
        
        return $next($request);
    }
}
