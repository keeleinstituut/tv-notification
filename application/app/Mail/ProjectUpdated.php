<?php

namespace App\Mail;

class ProjectUpdated extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-updated';
    }

    protected function title(): string
    {
        return 'Tellimust on uuendatud';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
        ];
    }
}
