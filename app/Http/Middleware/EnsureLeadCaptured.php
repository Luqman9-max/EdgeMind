<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Lead;
use Symfony\Component\HttpFoundation\Response;

class EnsureLeadCaptured
{
    public function handle(Request $request, Closure $next): Response
    {
        // Step 1: Check if the cookie exists at all
        if (!$request->cookie('edgemind_lead_captured')) {
            return redirect()->route('lead.form');
        }

        // Step 2: Cross-validate cookie against the database.
        // Protects against stale cookies surviving DB resets (dev/test scenario)
        // and against manually forged cookies.
        $email = $request->cookie('edgemind_lead_email');
        $dbVerified = false;

        if ($email) {
            $dbVerified = Lead::where('email', $email)->exists();
        } else {
            // Fallback: if no email cookie, accept if any lead exists
            // (for backwards compatibility with cookies set before this fix)
            $dbVerified = Lead::exists();
        }

        if (!$dbVerified) {
            // Stale cookie detected — expire it and send back to form
            $expired = Cookie::forget('edgemind_lead_captured');
            $expiredEmail = Cookie::forget('edgemind_lead_email');
            return redirect()->route('lead.form')
                ->withCookie($expired)
                ->withCookie($expiredEmail);
        }

        return $next($request);
    }
}
