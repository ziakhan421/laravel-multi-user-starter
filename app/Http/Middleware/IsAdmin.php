<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return redirect('/admin/console');
        }
        return $next($request);
    }
}
