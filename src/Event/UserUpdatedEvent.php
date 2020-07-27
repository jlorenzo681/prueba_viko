<?php

namespace App\Event;

use App\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * The order.placed event is dispatched each time an order is created
 * in the system.
 */
class UserUpdatedEvent extends Event
{
    public const NAME = 'user.updated';

    protected $user;
    private $response;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Returns the response object.
     *
     * @return Response|null
     */
    public function getResponse(): Response
    {
        return $this->response;
    }

    /**
     * Sets a response and stops event propagation.
     * @param Response $response
     */
    public function setResponse(Response $response): void
    {
        $this->response = $response;

        $this->stopPropagation();
    }

    public function getUser(): User
    {
        return $this->user;
    }
}
