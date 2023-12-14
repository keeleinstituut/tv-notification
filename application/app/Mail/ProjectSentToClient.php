<?php

namespace App\Mail;

class ProjectSentToClient extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-sent-to-client';
    }

    protected function title(): string
    {
        return 'Tellimus tellijale edastatud';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
        ];
    }
}
