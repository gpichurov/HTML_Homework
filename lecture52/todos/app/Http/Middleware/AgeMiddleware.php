<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Requests\Request;

class AgeMiddleware
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
    	/* Request::input('age');
    	$request->input('age'); */
    	if ($request->input('age') < 18) {
    		throw new AccessDeniedException('You must be over 18');
    	}
    	
        return $next($request);
    }
}
