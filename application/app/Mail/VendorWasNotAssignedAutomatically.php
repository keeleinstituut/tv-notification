<?php

namespace App\Mail;

class VendorWasNotAssignedAutomatically extends BaseEmailNotificationMessage
{

    protected function template(): string
    {
        return 'emails.vendor-was-not-assigned-automatically';
    }

    protected function title(): string
    {
        return 'Kalender ei leidnud teostajat';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
        ];
    }
}
