<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\App;

abstract class BaseEmailNotificationMessage extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(protected array $data)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            to: data_get($this->data, 'receiver_email'),
            subject: $this->composeSubject(),
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: $this->template(),
            with: $this->composeVariables()
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }

    abstract protected function template(): string;

    abstract protected function title(): string;

    abstract protected function templateVariables(): array;

    protected function getVariable(string $name, mixed $default = null): mixed
    {
        return data_get($this->data, "variables.$name", $default);
    }

    private function layoutVariables(): array
    {
        return [
            'username' => data_get($this->data, 'receiver_name', data_get($this->data, 'receiver_email')),
            'title' => $this->title(),
        ];
    }

    private function composeSubject(): string
    {
        if (App::environment('production')) {
            return $this->title();
        }

        return '['.App::environment().'] '.$this->title();
    }

    private function composeVariables(): array
    {
        return array_merge(
            $this->layoutVariables(),
            $this->templateVariables()
        );
    }
}
