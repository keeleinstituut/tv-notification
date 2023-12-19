<?php

namespace App\Mail;

class InstitutionUserAssignedToProject extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.institution-user-assigned-to-project';
    }

    protected function title(): string
    {
        return 'Tellimus määratud';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
        ];
    }
}
