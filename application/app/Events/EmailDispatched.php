<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use PhpAmqpLib\Message\AMQPMessage;
use SyncTools\Events\BaseConsumedEvent;

class EmailDispatched extends BaseConsumedEvent
{
    use Dispatchable, InteractsWithSockets;

    public function __construct(public readonly array $params)
    {
    }

    public static function produceFromMessage(AMQPMessage $message): BaseConsumedEvent
    {
        return new static(json_decode($message->getBody(), true));
    }
}
