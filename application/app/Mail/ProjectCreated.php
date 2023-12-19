<?php

namespace App\Mail;

class ProjectCreated extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-created';
    }

    protected function title(): string
    {
        return 'Uus tellimus loodud';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
        ];
    }
}
