<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    #[Route(path: '/logout', name: 'logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
    #[Route(path: '/login', name: 'login')]
    public function login(AuthenticationUtils $auth): Response
    {
        $error = $auth->getLastAuthenticationError();
        $userName = $auth->getLastUsername();

        return $this->render('login/index.html.twig', [
            'username' => $userName,
            'error' => $error,
        ]);
    }
}
