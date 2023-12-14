<?php

namespace App\Mail;

class ProjectCancelledProjectManager extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-cancelled-pm';
    }

    protected function title(): string
    {
        return 'Tellimus tühistatud';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
            'cancellationDescription' => $this->getVariable('project.cancellation_description'),
        ];
    }
}
