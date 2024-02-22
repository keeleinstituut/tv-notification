<?php

namespace App\Mail;

class TaskAccepted extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.task-accepted';
    }

    protected function title(): string
    {
        return 'Ülesanne vastuvõetud';
    }

    protected function templateVariables(): array
    {
        return [
            'assigneeName' => $this->getVariable('vendor.company_name', $this->getVariable('user.name')),
            'taskExtId' => $this->getVariable('assignment.ext_id'),
            'taskShortName' => $this->getVariable('job_definition.job_short_name'),
        ];
    }
}
