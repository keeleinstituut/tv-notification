<?php

namespace App\Mail;

class TaskCancelled extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.task-cancelled';
    }

    protected function title(): string
    {
        return 'Ülesanne tühistatud';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
            'taskShortName' => $this->getVariable('job_definition.job_short_name'),
        ];
    }
}
