<?php

namespace App\Http\Middleware;

use Closure;

use Log;

class PrimeiroMiddleware
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
        /*
        Log::debug('Passou pelo PrimeiroMiddleware');
        return $next($request);
        */

        // Teste da sequencia de chamada dos middleware

        Log::debug('Passou pelo PrimeiroMiddleware ANTES');
        
        $response = $next($request);

        Log::debug('Passou pelo PrimeiroMiddleware DEPOIS');

        return $response;
    }
}
