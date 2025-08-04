<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NoIndex
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        // Only add header if it's a successful response with HTML
        if ($response->headers->get('Content-Type') === null || str_contains($response->headers->get('Content-Type'), 'text/html')) {
            $response->headers->set('X-Robots-Tag', 'noindex, nofollow');
        }

        return $response;
    }
}

