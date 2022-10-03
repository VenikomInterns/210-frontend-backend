<?php

namespace App\Http\Middleware;

use Closure;
use http\Client\Request;

class CheckIfAdmin
{
    public function handle($request, \Closure $next)
    {
        if (!auth()->user()->isAdmin()) {
            return redirect()->route('home');
        }

        return $next($request);
    }

//    public function handle(Request $request, Closure $next)
//    {
//        $user = $request->user();
//        abort_if(!$user, 401);
//        abort_if(!$user->admin, 403);
//
//        return $next($request);
//    }
}
