<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
{
    if ($request->user()) {
        if ($request->user()->role === 'admin' || $request->user()->role === 'user') {
            return $next($request);
        }
    }
    abort(403, 'Access denied');
}

}
