<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckLoginMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {    if(!session()->has('level')){
        return redirect()->route('login');    }
        return $next($request);
    }
}
