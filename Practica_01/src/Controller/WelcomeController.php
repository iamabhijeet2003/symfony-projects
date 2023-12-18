<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\Utilities;

class WelcomeController extends AbstractController
{
    #[Route('/welcomemain', name: 'app_welcome')]
    public function index(): Response
    {
        $cadena = Utilities::today();
        return $this->render('welcome/index.html.twig', [
            'controller_name' => 'WelcomeController',
            "missatge"=>$cadena,
            "language"=>null,
            "user"=>null
        ]);
    }


    #[Route('/welcome/en/{user}', name: 'app_welcome_en')]
    public function welcomeEn($user=''): Response
    {
        return $this->render('welcome/index.html.twig', [
            'language' => 'en',
            'user'=> $user
        ]);
    }

    #[Route('/welcome/es/{user}', name: 'app_welcome_es')]
    public function welcomeEs($user=''): Response
    {
        return $this->render('welcome/index.html.twig', [
            'language' => 'es',
            'user'=> $user
        ]);
    }

    #[Route('/welcome/va/{user}', name: 'app_welcome_va')]
    public function welcomeVa($user=''): Response
    {
        return $this->render('welcome/index.html.twig', [
            'language' => 'va',
            'user'=> $user
        ]);
    }
}
