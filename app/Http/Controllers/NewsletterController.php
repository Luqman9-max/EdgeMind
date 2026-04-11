<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\NewSubscriberNotification;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers,email'
        ]);

        try {
            $subscriber = Subscriber::create($validated);
            Mail::to(config('mail.from.address'))->send(new NewSubscriberNotification($subscriber->email));

            return response()->json([
                'message' => 'Signal locked. You\'re in.',
                'subscriber' => $subscriber
            ], 201);
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Newsletter Subscription Error: ' . $e->getMessage());
            return response()->json([
                'message' => 'System error. Try again.'
            ], 500);
        }
    }
}
