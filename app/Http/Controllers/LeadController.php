<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Cookie;

class LeadController extends Controller
{
    /**
     * Entry point from the CTA buttons.
     * Previously this bypassed the gate entirely — now it routes correctly.
     */
    public function evolve()
    {
        // If the user has already submitted, send them straight to catalog.
        // Otherwise, send them to the lead form to complete the gate.
        if (request()->cookie('edgemind_lead_captured')) {
            $email = request()->cookie('edgemind_lead_email');
            $dbVerified = $email
                ? Lead::where('email', $email)->exists()
                : Lead::exists();

            if ($dbVerified) {
                return redirect()->route('catalog.index');
            }
        }

        return redirect()->route('lead.form');
    }

    /**
     * Show the lead capture form.
     * Checks cookie AND database — stale cookies from DB resets are rejected.
     */
    public function showForm(Request $request)
    {
        if ($request->cookie('edgemind_lead_captured')) {
            // Cross-validate against the database to reject stale cookies
            $email = $request->cookie('edgemind_lead_email');
            $dbVerified = $email
                ? Lead::where('email', $email)->exists()
                : Lead::exists();

            if ($dbVerified) {
                return redirect()->route('catalog.index');
            }

            // Cookie exists but no DB record — stale cookie, expire it and show form
            $expired = Cookie::forget('edgemind_lead_captured');
            $expiredEmail = Cookie::forget('edgemind_lead_email');
            return response(view('public.lead-form'))
                ->withCookie($expired)
                ->withCookie($expiredEmail);
        }

        return view('public.lead-form');
    }

    /**
     * Handle the form submission.
     * Stores both a gate cookie and an email-identity cookie for DB validation.
     */
    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Insert or skip if email already exists
        $existingLead = Lead::where('email', $validated['email'])->first();

        if (!$existingLead) {
            $validated['source'] = 'catalog_gate';
            Lead::create($validated);
        }

        // Gate cookie: presence signals submission (1 year)
        $gateCookie = Cookie::make('edgemind_lead_captured', true, 525600);

        // Identity cookie: stores email so middleware can validate against DB
        // This lets us detect stale gate cookies after DB resets
        $emailCookie = Cookie::make('edgemind_lead_email', $validated['email'], 525600);

        return redirect()->route('catalog.index')
            ->withCookie($gateCookie)
            ->withCookie($emailCookie);
    }

    /**
     * DEV-ONLY: Reset the lead gate cookies for testing fresh-user flow.
     * Remove this route in production or guard it behind APP_ENV=local.
     */
    public function resetGate()
    {
        if (app()->environment('production')) {
            abort(404);
        }

        $expired = Cookie::forget('edgemind_lead_captured');
        $expiredEmail = Cookie::forget('edgemind_lead_email');

        return redirect()->route('lead.form')
            ->withCookie($expired)
            ->withCookie($expiredEmail)
            ->with('status', 'Lead gate reset. You are now a fresh user.');
    }
}
