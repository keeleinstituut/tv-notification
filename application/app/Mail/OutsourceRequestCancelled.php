<?php

namespace App\Mail;

class OutsourceRequestCancelled extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.outsource-request-cancelled';
    }

    protected function title(): string
    {
        return 'Päring tühistati';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
            'cancellationReason' => $this->getVariable('request.cancellation_reason'),
        ];
    }
}
