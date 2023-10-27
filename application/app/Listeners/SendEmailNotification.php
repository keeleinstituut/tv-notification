<?php

namespace App\Listeners;

use App\Events\EmailDispatched;
use App\Services\EmailService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
        dd($event);
        // EmailService::deliver(...);
    }
}
