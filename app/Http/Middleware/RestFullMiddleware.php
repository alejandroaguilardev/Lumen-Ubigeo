<?php

namespace App\Http\Middleware;

use Closure;

class RestFullMiddleware
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
        if($request->isJson()){
            return $next($request);
        }else{
            return response()->json(['error' => 'Unauthorized'], 403);
        }
    }
}
