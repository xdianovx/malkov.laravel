<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestModalMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @param  array  $details
     * @return void
     */
    public function __construct(array $details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'У Вас новая заявка',
        );
    }
    public function build(): self
    {
        return $this->view('emails.request_modal_email')
            ->with([
                'title' => $this->details['title'],
                'phone' => $this->details['phone']
            ]);
    }
}

