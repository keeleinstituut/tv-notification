<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Email extends Mailable
{
    use Queueable, SerializesModels;

    public string $userName;
    public string $title;
    public string $body;

    public function __construct(public array $data)
    {
        $this->userName = $data['userName'];
        $this->title = $data['subject'];
        $this->body = $data['body'];
    }

    public function build(): Email
    {
        dump($this->data);
        return $this->view('emails.' . $this->data['template'])
            ->to($this->data['recipient'])
            ->subject($this->title);
    }
}
