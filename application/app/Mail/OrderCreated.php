<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class OrderCreated extends Mailable
{
    // This is just an example how specific mailable types can be created
    use Queueable, SerializesModels;

    public function build(): OrderCreated
    {
        return $this->view('emails.order_created');
    }
}
