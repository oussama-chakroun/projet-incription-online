<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendValidationCondidature extends Mailable
{
    use Queueable, SerializesModels;

    public string $recipientName;
    public string $recipientEmail;
    public string $password;

    /**
     * Create a new message instance.
     *
     * @param string $recipientName
     * @param string $recipientEmail
     * @param string $password
     */
    public function __construct(string $recipientName, string $recipientEmail, string $password)
    {
        $this->recipientName = $recipientName;
        $this->recipientEmail = $recipientEmail;
        $this->password = $password;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'UPF Inscription Status',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.send-validation-condidature',
        );
    }


    /**
     * Get the message data for the view.
     */
    public function build()
    {
        return $this->with([
            'recipientName' => $this->recipientName,
            'recipientEmail' => $this->recipientEmail,
            'password' => $this->password,
        ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
