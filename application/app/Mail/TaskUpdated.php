<?php

namespace App\Mail;

class TaskUpdated extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.task-updated';
    }

    protected function title(): string
    {
        return 'Ülesannet on uuendatud';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
            'taskShortName' => $this->getVariable('job_definition.job_short_name'),
        ];
    }
}
