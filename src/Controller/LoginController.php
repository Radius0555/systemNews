<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/app_login', name: 'app_login')]
    public function index(AuthenticationUtils $auth): Response
    {
        $error = $auth->getLastAuthenticationError();

        $userName = $auth->getLastUsername();

        return $this->render('login/index.html.twig', [
            'username' => $userName,
            'error' => $error,
        ]);
    }
}
