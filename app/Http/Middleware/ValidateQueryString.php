<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateQueryString
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // Cek jika ada query string
        if ($request->getQueryString()) {
            $queryString = $request->getQueryString();
            if (strpos($queryString, 'page=') !== false || $queryString !== 'page=') {
                abort(Response::HTTP_NOT_FOUND);
            }
        }

        return $next($request);
    }
}
