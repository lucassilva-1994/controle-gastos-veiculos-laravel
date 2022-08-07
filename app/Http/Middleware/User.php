<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class User
{
    public function handle(Request $request, Closure $next)
    {
        if(!session()->get("user")){
            return to_route("user.index");
        }
        return $next($request);
    }
}
