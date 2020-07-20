<?php

namespace App\Http\Middleware;

use Closure;

class ProductMiddleware
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
        $request->validate([
            "title" => "required",
            "description" => "required",
            "thumbnail" => "required",
            "price" => "required"
        ]);

        return $next($request);
    }
}
