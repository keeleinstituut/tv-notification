<?php

namespace App\Mail;

class TaskDeclinedByVendor extends BaseEmailNotificationMessage
{

    protected function template(): string
    {
        return 'emails.task-declined-by-vendor';
    }

    protected function title(): string
    {
        return 'Ülesandest keeldutud';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
            'taskShortName' => $this->getVariable('job_definition.job_short_name'),
            'assigneeName' => $this->getVariable('user.name'),
        ];
    }
}
