<?php

namespace App\Mail;

class ProjectRejected extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.project-rejected';
    }

    protected function title(): string
    {
        return 'Tellimus tagasi lükatud';
    }

    protected function templateVariables(): array
    {
        return [
            'projectExtId' => $this->getVariable('project.ext_id'),
            'rejectionDescription' => $this->getVariable('project_review_rejection.description'),
            'rejectionSubProjectExtIds' => collect($this->getVariable('project_review_rejection.sub_projects.*.ext_id'))->implode(', '),
        ];
    }
}
