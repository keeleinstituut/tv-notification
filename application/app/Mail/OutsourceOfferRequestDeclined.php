<?php

namespace App\Mail;

class OutsourceOfferRequestDeclined extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.outsource-offer-request-declined';
    }

    protected function title(): string
    {
        return 'Tõlketellimuse päringust keelduti';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
            'offerInstitutionName' => $this->getVariable('offer_institution.name'),
        ];
    }
}
