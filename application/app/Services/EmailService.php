<?php

namespace App\Services;

use App\Enums\NotificationType;
use App\Mail\Email;
use App\Models\Notification;
use Illuminate\Support\Facades\Mail;

class EmailService
{
    public static function deliver(array $params): void
    {
        Notification::create([
            'type' => NotificationType::EMAIL,
            'data' => json_encode([
                'template' => $params['template'],
                'userName' => $params['userName'],
                'recipient' => $params['recipient'],
                'subject' => $params['subject'],
            ]),
        ]);

        Mail::to($params['recipient'])->send(new Email($params));
    }
}
