<?php

use App\Events\EmailNotificationConsumedEvent;
use SyncTools\Events\MessageEventFactory;

return [
    /*
    |--------------------------------------------------------------------------
    | AMQP connection properties
    |--------------------------------------------------------------------------
    */
    'connection' => [
        'host' => env('AMQP_HOST', 'localhost'),
        'port' => env('AMQP_PORT', 5672),
        'username' => env('AMQP_USER', 'guest'),
        'password' => env('AMQP_PASSWORD', 'guest'),
        'vhost' => env('AMQP_VHOST', '/'),
    ],

    /*
    |--------------------------------------------------------------------------
    | AMQP publisher properties (remove if not needed)
    |--------------------------------------------------------------------------
    */
    'publisher' => [
        'exchanges' => [
            [
                'exchange' => env('EMAIL_NOTIFICATION_EXCHANGE'),
                'type' => 'topic',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | AMQP consumer properties (remove if not needed)
    |--------------------------------------------------------------------------
    */
    'consumer' => [
        'queues' => [
            [
                'queue' => env('EMAIL_NOTIFICATION_QUEUE'),
                'bindings' => [
                    ['exchange' => env('EMAIL_NOTIFICATION_EXCHANGE')],
                ],
            ],
        ],
        'events' => [
            'mode' => MessageEventFactory::MODE_QUEUE,
            'map' => [
                env('EMAIL_NOTIFICATION_QUEUE') => EmailNotificationConsumedEvent::class,
            ],
        ],
        'enable_manual_acknowledgement' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications AMQP properties (remove if not needed)
    |--------------------------------------------------------------------------
    */
    'notifications' => [
        'email_notification_exchange' => env('EMAIL_NOTIFICATION_EXCHANGE'),
        'required_jwt_realm_role' => env('NOTIFICATION_REQUIRED_JWT_REALM_ROLE', 'publish-notifications'),
    ],
];
