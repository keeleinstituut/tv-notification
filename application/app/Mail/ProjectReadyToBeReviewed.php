<?php

namespace App\Mail;

class ProjectReadyToBeReviewed extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-ready-for-review';
    }

    protected function title(): string
    {
        return 'Tellimus vastuvõtmiseks valmis';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
        ];
    }
}
