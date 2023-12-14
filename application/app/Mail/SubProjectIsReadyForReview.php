<?php

namespace App\Mail;

class SubProjectIsReadyForReview extends BaseEmailNotificationMessage
{
    protected function template(): string
    {
        return 'emails.subproject-ready-for-review';
    }

    protected function title(): string
    {
        return 'Alamtellimus ülevaatamiseks valmis';
    }

    protected function templateVariables(): array
    {
        return [
            'subProjectExtId' => $this->getVariable('sub_project.ext_id'),
        ];
    }
}
