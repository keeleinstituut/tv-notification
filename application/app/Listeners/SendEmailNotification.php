<?php

namespace App\Listeners;

use App\Events\EmailDispatched;
use App\Services\EmailService;

class SendEmailNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EmailDispatched $event): void
    {
        EmailService::deliver($event->params);
    }
}
