<?php

namespace App\Mail;

class ProjectRegistered extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-registered';
    }

    protected function title(): string
    {
        return 'Tellimus registreeritud';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
        ];
    }
}
