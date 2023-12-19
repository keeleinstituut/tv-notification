<?php

namespace App\Mail;

class ProjectCancelled extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-cancelled';
    }

    protected function title(): string
    {
        return 'Tellimus tühistatud';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
            'cancellationReason' => $this->getVariable('project.cancellation_reason'),
            'cancellationComment' => $this->getVariable('project.cancellation_comment'),
        ];
    }
}
