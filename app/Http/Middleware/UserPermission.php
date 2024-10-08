<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $UserType): Response

    {

        if(auth()->user()->role == $UserType){

            return $next($request);

        }

          

        return response()->json(['You do not have permission to access for this page.']);

        /* return response()->view('errors.check-permission'); */

    }
}
