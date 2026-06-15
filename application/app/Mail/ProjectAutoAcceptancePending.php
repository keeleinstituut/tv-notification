<?php

namespace App\Mail;

class ProjectAutoAcceptancePending extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-auto-acceptance-pending';
    }

    protected function title(): string
    {
        return 'Vastuvõtmata tellimus määratakse automaatselt vastuvõetuks';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
        ];
    }
}
