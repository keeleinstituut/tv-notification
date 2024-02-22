<?php

namespace App\Mail;

class ProjectDeadlineReached extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-deadline-reached';
    }

    protected function title(): string
    {
        return 'Tellimuse tähtaeg möödunud';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
        ];
    }
}
