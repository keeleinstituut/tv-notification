<?php

namespace App\Mail;

class InstitutionUserCreated extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.institution-user-activated';
    }

    protected function title(): string
    {
        return 'Konto registreerimine Tõlkeväravas';
    }

    protected function templateVariables(): array
    {
        return [];
    }
}
