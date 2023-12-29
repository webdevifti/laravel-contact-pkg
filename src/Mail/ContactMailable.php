<?php

namespace Eftia\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $name;

    /**
     * Create a new message instance.
     */
    public function __construct($message,$name)
    {
        //
        $this->message = $message;
        $this->name = $name;
    }

    public function build(): void
    {
        $this->subject('Contact Query')
            ->markdown('contact::contact.mail')
            ->with(['message' => $this->message, 'name' => $this->name]);
    }
}
