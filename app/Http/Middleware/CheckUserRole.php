<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {   
        if (Auth::check() && Auth::user()->role ==  'admin' ) {
            return $next($request); # if the user is admin then : they autorized...
        }
        return  redirect('home')->with('status','You are NO autorized to enter this link !');
        abort(403);
    }
}
