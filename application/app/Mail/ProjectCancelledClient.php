<?php

namespace App\Mail;

class ProjectCancelledClient extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-cancelled-client';
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
            'selectedSubProjectsExtIds' => collect($this->getVariable('project.cancellation_sub_projects.*.ext_id'))->implode(', '),
        ];
    }
}
