<?php

namespace App\Listeners;

use App\Events\EmailNotificationConsumedEvent;
use App\Mail\InstitutionUserActivated;
use App\Mail\InstitutionUserAssignedToProject;
use App\Mail\InstitutionUserCreated;
use App\Mail\NewVendorTaskAvailable;
use App\Mail\ProjectAccepted;
use App\Mail\ProjectCancelledClient;
use App\Mail\ProjectCancelledProjectManager;
use App\Mail\ProjectCreated;
use App\Mail\ProjectDeadlineReached;
use App\Mail\ProjectReadyToBeReviewed;
use App\Mail\ProjectRegistered;
use App\Mail\ProjectRejected;
use App\Mail\ProjectSentToClient;
use App\Mail\SubProjectIsReadyForReview;
use App\Mail\SubProjectTaskDone;
use App\Mail\TaskAccepted;
use App\Mail\VendorTaskRejected;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use InvalidArgumentException;
use KeycloakAuthGuard\Middleware\EnsureJwtBelongsToServiceAccountWithSyncRole;
use NotificationClient\Enums\NotificationType;
use PhpAmqpLib\Wire\AMQPTable;
use RuntimeException;
use Throwable;

class SendEmailNotificationListener
{
    public function __construct(readonly private EnsureJwtBelongsToServiceAccountWithSyncRole $syncRoleAuthChecker)
    {
    }

    /**
     * Handle the event.
     */
    public function handle(EmailNotificationConsumedEvent $event): void
    {
        try {
            $this->logEvent($event);

            $this->authorize($event);

            $this->sendEmail($event);

            $this->ackMessage($event);
        } catch (Throwable $e) {
            Log::error($e->getMessage(), [
                'event' => $event->getBody(),
            ]);
        }
    }

    /**
     * @throws AuthorizationException
     */
    private function authorize(EmailNotificationConsumedEvent $event): void
    {
        /** @var AMQPTable $applicationHeaders */
        $applicationHeaders = $event->message->get('application_headers');

        Gate::forUser(null)->allowIf(
            $this->syncRoleAuthChecker->jwtHasRealmRole(
                $applicationHeaders['jwt'],
                Config::get('amqp.notifications.required_jwt_realm_role')
            ),
            'Realm role is missing'
        );
    }

    private function sendEmail(EmailNotificationConsumedEvent $event): void
    {
        Mail::send($this->composeMessage($event));
    }

    private function composeMessage(EmailNotificationConsumedEvent $event): Mailable
    {
        $data = $event->getBody();
        $notificationType = NotificationType::tryFrom(data_get($data, 'type'));
        if (empty($notificationType)) {
            throw new InvalidArgumentException('Unknown notification type received');
        }

        return match ($notificationType) {
            NotificationType::ProjectCreated => new ProjectCreated($data),
            NotificationType::ProjectCancelledPm => new ProjectCancelledProjectManager($data),
            NotificationType::ProjectCancelledClient => new ProjectCancelledClient($data),
            NotificationType::InstitutionUserAssignedToProject => new InstitutionUserAssignedToProject($data),
            NotificationType::TaskAccepted => new TaskAccepted($data),
            NotificationType::SubProjectTaskMarkedAsDone => new SubProjectTaskDone($data),
            NotificationType::ProjectSentToClient => new ProjectSentToClient($data),
            NotificationType::SubProjectSentToPm => new SubProjectIsReadyForReview($data),
            NotificationType::ProjectRejected => new ProjectRejected($data),
            NotificationType::ProjectAccepted => new ProjectAccepted($data),
            NotificationType::ProjectDeadlineReached => new ProjectDeadlineReached($data),
            NotificationType::ProjectRegistered => new ProjectRegistered($data),
            NotificationType::ProjectReadyForReview => new ProjectReadyToBeReviewed($data),
            NotificationType::TaskCreated => new NewVendorTaskAvailable($data),
            NotificationType::TaskRejected => new VendorTaskRejected($data),
            NotificationType::InstitutionUserCreated => new InstitutionUserCreated($data),
            NotificationType::InstitutionUserActivated => new InstitutionUserActivated($data),
            default => throw new RuntimeException('No email message found for notification type: '.$notificationType->value)
        };
    }

    private function ackMessage(EmailNotificationConsumedEvent $event): void
    {
        $event->message->ack();
    }

    private function logEvent(EmailNotificationConsumedEvent $event): void
    {
        Log::info('Email notification event consumed: '.json_encode($event->getBody()));
    }
}
