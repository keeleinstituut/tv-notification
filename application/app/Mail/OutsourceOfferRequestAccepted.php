<?php

namespace App\Mail;

class OutsourceOfferRequestAccepted extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.outsource-offer-request-accepted';
    }

    protected function title(): string
    {
        return 'Tõlketellimuse päring vastu võetud';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
        ];
    }
}
