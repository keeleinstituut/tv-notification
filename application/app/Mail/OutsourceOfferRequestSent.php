<?php

namespace App\Mail;

class OutsourceOfferRequestSent extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.outsource-offer-request-sent';
    }

    protected function title(): string
    {
        return 'Uus tõlketellimuse päring';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
        ];
    }
}
