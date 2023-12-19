<?php

namespace App\Mail;

class InstitutionUserActivated extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.institution-user-activated';
    }

    protected function title(): string
    {
        return 'Konto aktiveerimine Tõlkeväravas';
    }

    protected function templateVariables(): array
    {
        return [];
    }
}
