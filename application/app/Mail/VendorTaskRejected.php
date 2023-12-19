<?php

namespace App\Mail;

class VendorTaskRejected extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.vendor-task-rejected';
    }

    protected function title(): string
    {
        return 'Ülesanne tagasi lükatud';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
        ];
    }
}
