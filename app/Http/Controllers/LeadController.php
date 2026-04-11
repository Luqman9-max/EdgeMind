<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Illuminate\Support\Facades\Cookie;

class LeadController extends Controller
{
    /**
     * Entry point from the CTA buttons
     */
    public function evolve()
    {
        return redirect()->route('catalog.index');
    }

    /**
     * Show the lead capture form
     */
    public function showForm(Request $request)
    {
        if ($request->cookie('edgemind_lead_captured')) {
            return redirect()->route('catalog.index');
        }

        return view('public.lead-form');
    }

    /**
     * Handle the form submission
     */
    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Check if email already exists
        $existingLead = Lead::where('email', $validated['email'])->first();

        if (!$existingLead) {
            $validated['source'] = 'catalog_gate';
            Lead::create($validated);
        }

        // Set cookie for 1 year (525600 minutes)
        $cookie = Cookie::make('edgemind_lead_captured', true, 525600);

        return redirect()->route('catalog.index')->withCookie($cookie);
    }
}
