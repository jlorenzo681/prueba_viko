<?php

namespace App\EventListener;

use App\Event\UserUpdatedEvent;
use Symfony\Component\HttpFoundation\Response;

class UserListener
{
    /**
     * @param UserUpdatedEvent $event
     */
    public function onPasswordUpdate(UserUpdatedEvent $event): void
    {
        $user = $event->getUser();
        $message = sprintf(
            'Password has changed for user: %s',
            $user->getUsername()
        );

        $response = new Response();
        $response->setContent($message);

        // sends the modified response object to the event
        $event->setResponse($response);
    }
}
