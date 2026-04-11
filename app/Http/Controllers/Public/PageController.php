<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class PageController extends Controller
{
    public function about()
    {
        return view('public.about');
    }

    public function contact()
    {
        return view('public.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'topic' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Save to database
            ContactMessage::create($validated);

            // Send email notification
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($validated));

            return response()->json(['success' => true, 'message' => 'Signal received.']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Transmission failed. Please try again.'], 500);
        }
    }
}
