<?php

namespace App\Mail;

class ProjectAutoAcceptancePending extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-auto-acceptance-pending';
    }

    protected function title(): string
    {
        return 'Vastuvõtmata tellimusused määratakse automaatselt vastuvõetuks';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtIds' => collect($this->getVariable('projects.*.ext_id'))
                ->filter()
                ->values()
                ->all(),
        ];
    }
}
