<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class Middleware
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
        Log::debug('Passou no Middleware');
        return $next($request);
    }
}
