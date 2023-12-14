<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use PhpAmqpLib\Message\AMQPMessage;
use SyncTools\Events\BaseConsumedEvent;

class EmailNotificationConsumedEvent extends BaseConsumedEvent
{
    use Dispatchable, InteractsWithSockets;

    public function __construct(public readonly AMQPMessage $message)
    {
    }

    public static function produceFromMessage(AMQPMessage $message): BaseConsumedEvent
    {
        return new static($message);
    }

    public function getBody(): array
    {
        return json_decode($this->message->getBody(), true);
    }
}
