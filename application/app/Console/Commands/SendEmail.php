<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use SyncTools\AmqpPublisher;

class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(AmqpPublisher $publisher)
    {
        dump("STARTING PUBLISH");
        $publisher->publish(
            [
                'id' => 'some-id',
                'template' => 'order_created',
                'recipient' => 'test@example.com',
                'userName' => 'test user',
                'subject' => 'Hello from test!',
                'body' => 'Content here',
            ],
            'email',
            'email.dispatched',
        );
    }
}
