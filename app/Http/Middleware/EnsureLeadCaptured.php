<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureLeadCaptured
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->cookie('edgemind_lead_captured')) {
            return redirect()->route('lead.form');
        }

        return $next($request);
    }
}
