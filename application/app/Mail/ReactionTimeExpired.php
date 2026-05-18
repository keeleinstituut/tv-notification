<?php

namespace App\Mail;

class ReactionTimeExpired extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.reaction-time-expired';
    }

    protected function title(): string
    {
        return 'Ülesande reaktsiooniaeg on möödas';
    }

    protected function templateVariables(): array
    {
        return [
            'vendorName' => $this->getVariable('vendor.name'),
            'taskExtId' => $this->getVariable('assignment.ext_id'),
            'taskShortName' => $this->getVariable('job_definition.job_short_name'),
        ];
    }
}
