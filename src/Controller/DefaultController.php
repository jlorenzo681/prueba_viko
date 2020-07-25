<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     */
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        return $this->render('default/index.html.twig', [
            'user_name' => $user->getUsername()
        ]);
    }

    /**
     * @Route("/reset_password", name="reset_password")
     */
    public function resetPassword(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        /** @var \App\Entity\User $user */
        $user = $this->getUser();

        return $this->render('default/reset_password.html.twig', [
            'user_name' => $user->getUsername()
        ]);
    }
}
