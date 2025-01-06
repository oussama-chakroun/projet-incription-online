<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConvocationDetailsMail extends Mailable
{
    use Queueable, SerializesModels;

    public $convocation;
    public $full_name;

    public function __construct($convocation , $full_name)
    {
        $this->convocation = $convocation;
        $this->full_name = $full_name;
    }

    public function build()
    {
        return $this->subject('Convocation Details - ' . $this->convocation->title)
                    ->view('mails.convocation-details');
    }
}
