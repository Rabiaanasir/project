<?php
// app/Mail/SendMail.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: 'sunsourcesolutions@gmail.com',
            subject: 'Thank you for contacting us!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'email.send', // The view should exist at resources/views/email/send.blade.php
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
