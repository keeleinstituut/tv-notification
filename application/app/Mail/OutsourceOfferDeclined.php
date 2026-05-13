<?php

namespace App\Mail;

class OutsourceOfferDeclined extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.outsource-offer-declined';
    }

    protected function title(): string
    {
        return 'Sinu pakkumus ei osutunud valituks';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
            'rejectionComment' => $this->getVariable('offer.rejection_comment'),
        ];
    }
}
