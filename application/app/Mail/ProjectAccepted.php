<?php

namespace App\Mail;

class ProjectAccepted extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-accepted';
    }

    protected function title(): string
    {
        return 'Tellimus vastu võetud';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
        ];
    }
}
