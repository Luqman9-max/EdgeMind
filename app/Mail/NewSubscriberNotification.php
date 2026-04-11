<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewSubscriberNotification extends Mailable
{
    use Queueable, SerializesModels;

    public string $subscriberEmail;

    public function __construct(string $email)
    {
        $this->subscriberEmail = $email;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Edge Mind — New Subscriber',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.subscriber',
        );
    }
}
