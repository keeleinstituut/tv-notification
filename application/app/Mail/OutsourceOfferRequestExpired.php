<?php

namespace App\Mail;

class OutsourceOfferRequestExpired extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.outsource-offer-request-expired';
    }

    protected function title(): string
    {
        return 'Tõlketellimuse päring aegus';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
        ];
    }
}
