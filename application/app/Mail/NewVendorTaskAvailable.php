<?php

namespace App\Mail;

class NewVendorTaskAvailable extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.vendor-new-task-available';
    }

    protected function title(): string
    {
        return 'Ootel ülesanne';
    }

    protected function templateVariables(): array
    {
        return [
            'assignmentExtId' => $this->getVariable('assignment.ext_id'),
        ];
    }
}
