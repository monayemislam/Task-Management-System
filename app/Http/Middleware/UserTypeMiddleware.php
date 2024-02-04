<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserTypeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            $userType = auth()->user()->type;

            if ($userType == 'Manager') {
                return redirect('/manager/dashboard');
            } elseif ($userType == 'Teammate') {
                return redirect('/teammate/dashboard');
            }
        }

        return $next($request);
    }
}
