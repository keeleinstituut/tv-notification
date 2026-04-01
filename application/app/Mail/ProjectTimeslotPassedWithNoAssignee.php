<?php

namespace App\Mail;

class ProjectTimeslotPassedWithNoAssignee extends BaseEmailNotificationMessage
{

    protected function template(): string
    {
        return 'emails.project-timeslot-passed-with-no-assignee';
    }

    protected function title(): string
    {
        return 'Tellimus, millel puudub teostaja, aegus';
    }

    protected function templateVariables(): array
    {
        return [
            'taskExtId' => $this->getVariable('assignment.ext_id'),
            'taskShortName' => $this->getVariable('job_definition.job_short_name'),
        ];
    }
}
