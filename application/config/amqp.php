<?php

use App\Events\EmailDispatched;
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
//    'publisher' => [
//        'exchanges' => [
//            [
//                'exchange' => 'email',
//                'type' => 'fanout',
//            ],
//        ],
//    ],

    /*
    |--------------------------------------------------------------------------
    | AMQP consumer properties (remove if not needed)
    |--------------------------------------------------------------------------
    */
    'consumer' => [
        'queues' => [
            [
                'queue' => 'tv-notification.email',
                'bindings' => [
                    [
                        'exchange' => 'email',
                    ],
                ],
            ],
        ],
        'events' => [
            'mode' => MessageEventFactory::MODE_ROUTING_KEY,
            'map' => [
                'email.dispatched' => EmailDispatched::class,
            ],
        ],
    ],
];
