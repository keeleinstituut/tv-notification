<?php

namespace App\Mail;

class OutsourceOfferAccepted extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.outsource-offer-accepted';
    }

    protected function title(): string
    {
        return 'Tellimus määratud';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
        ];
    }
}
