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
            [
                'exchange' => env('AUDIT_LOG_EVENTS_EXCHANGE'),
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
    | Audit Log AMQP properties (remove if not needed)
    |--------------------------------------------------------------------------
    */
    'audit_logs' => [
        'exchange' => env('AUDIT_LOG_EVENTS_EXCHANGE'),
        'trace_id_http_header' => env('AUDIT_LOG_TRACE_ID_HTTP_HEADER'),
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
