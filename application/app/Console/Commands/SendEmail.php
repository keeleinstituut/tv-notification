<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use NotificationClient\DataTransferObjects\EmailNotificationMessage;
use NotificationClient\Enums\NotificationType;
use NotificationClient\Services\NotificationPublisher;
use Throwable;

/**
 * Temp command that contains publishing of all notifications with their variables.
 */
class SendEmail extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @throws Throwable
     */
    public function handle(NotificationPublisher $publisher): void
    {
        $receiverEmail = '';
        $receiverName = '';

        dump('STARTING PUBLISH');

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectCreated,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => [
        //                        'ext_id' => 'OIU-2023-12-T-130'
        //                    ]
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectCancelledPm,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => [
        //                        'ext_id' => 'OIU-2023-12-T-130',
        //                        'cancellation_description' => 'The project is not needed anymore'
        //                    ]
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::InstitutionUserAssignedToProject,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => [
        //                        'ext_id' => 'OIU-2023-12-T-130',
        //                    ]
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::TaskAccepted,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'assignment' => ['ext_id' => 'OIU-2023-12-T-130/1.1'],
        //                    'user' => ['name' => 'SuperVendor'],
        //                    'job_definition' => ['job_short_name' => 'JobShortName']
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::SubProjectTaskMarkedAsDone,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'sub_project' => ['ext_id' => 'OIU-2023-12-T-130/1.1'],
        //                    'user' => ['name' => 'SuperVendor'],
        //                    'job_definition' => ['job_short_name' => 'JobShortName']
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectSentToClient,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => ['ext_id' => 'OIU-2023-12-T-130'],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::SubProjectSentToPm,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'sub_project' => ['ext_id' => 'OIU-2023-12-T-130'],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectRejected,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => ['ext_id' => 'OIU-2023-12-T-130'],
        //                    'project_review_rejection' => [
        //                        'description' => 'The reason of why the project is rejected',
        //                        'sub_projects' => [
        //                            ['ext_id' => 'OIU-2023-12-T-130/1'],
        //                            ['ext_id' => 'OIU-2023-12-T-130/2'],
        //                        ]
        //                    ]
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectAccepted,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => ['ext_id' => 'OIU-2023-12-T-130'],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectDeadlineReached,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => ['ext_id' => 'OIU-2023-12-T-130'],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectRegistered,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => ['ext_id' => 'OIU-2023-12-T-130'],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectCancelledClient,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => [
        //                        'ext_id' => 'OIU-2023-12-T-130',
        //                        'cancellation_description' => 'The project is not needed anymore',
        //                        'cancellation_sub_projects' => [
        //                            ['ext_id' => 'OIU-2023-12-T-130/1'],
        //                            ['ext_id' => 'OIU-2023-12-T-130/2'],
        //                        ]
        //                    ],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectReadyForReview,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => [
        //                        'ext_id' => 'OIU-2023-12-T-130',
        //                    ],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectAccepted,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => [
        //                        'ext_id' => 'OIU-2023-12-T-130',
        //                    ],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::ProjectDeadlineReached,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'project' => [
        //                        'ext_id' => 'OIU-2023-12-T-130',
        //                    ],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::TaskCreated,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'assignment' => [
        //                        'ext_id' => 'OIU-2023-12-T-130',
        //                    ],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::TaskRejected,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'assignment' => [
        //                        'ext_id' => 'OIU-2023-12-T-130/1.1',
        //                    ],
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::SubProjectTaskMarkedAsDone,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'user' => [
        //                        'name' => 'Some Name',
        //                    ],
        //                    'sub_project' => [
        //                        'ext_id' => 'OIU-2023-12-T-130/1.1'
        //                    ],
        //                    'job_definition' => [
        //                        'job_short_name' => 'Translation'
        //                    ]
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::TaskAccepted,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName,
        //                'variables' => [
        //                    'user' => [
        //                        'name' => 'Some Name',
        //                    ],
        //                    'assignment' => [
        //                        'ext_id' => 'OIU-2023-12-T-130/1.1'
        //                    ],
        //                    'job_definition' => [
        //                        'job_short_name' => 'Translation'
        //                    ]
        //                ]
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::InstitutionUserCreated,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName
        //            ])
        //        );

        //        $publisher->publishEmailNotification(
        //            EmailNotificationMessage::make([
        //                'notification_type' => NotificationType::InstitutionUserActivated,
        //                'receiver_email' => $receiverEmail,
        //                'receiver_name' => $receiverName
        //            ])
        //        );
    }
}
