<?php

namespace App\Mail;

class SubProjectTaskDone extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.subproject-task-done';
    }

    protected function title(): string
    {
        return 'Ülesanne teostatud';
    }

    protected function templateVariables(): array
    {
        return [
            'actingUsername' => $this->getVariable('user.name'),
            'subProjectExtId' => $this->getVariable('sub_project.ext_id'),
            'taskShortName' => $this->getVariable('job_definition.job_short_name'),
        ];
    }
}
