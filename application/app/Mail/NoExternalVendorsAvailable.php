<?php

namespace App\Mail;

class NoExternalVendorsAvailable extends BaseEmailNotificationMessage
{

    protected function template(): string
    {
        return 'emails.no-external-vendors-available';
    }

    protected function title(): string
    {
        return 'Väliseid tõlkijaid ei ole saadaval';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
            'taskShortName' => $this->getVariable('job_definition.job_short_name'),
        ];
    }
}
