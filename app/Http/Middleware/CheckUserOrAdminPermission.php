<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;


class CheckUserOrAdminPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // Check if the user has either 'user' or 'admin' permission
        if (auth()->user()->role == 'user' || auth()->user()->role == 'admin') {
            return $next($request);
        }

        // Redirect or deny access if they don't have the required permissions
        return redirect('/'); // Or, return a 403 error response
    }

}
