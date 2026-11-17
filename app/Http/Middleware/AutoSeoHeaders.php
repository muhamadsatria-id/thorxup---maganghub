<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutoSeoHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Jika environment bukan production, paksa seluruh halaman noindex
        if (!app()->isProduction()) {
            $response->headers->set('X-Robots-Tag', 'noindex, nofollow');
            return $response;
        }

        // Jika URL memiliki query parameter (filter, search, sort, page=2), cegah duplicate index
        if (count($request->query()) > 0) {
            $response->headers->set('X-Robots-Tag', 'noindex, follow');
        }

        return $response;
    }
}