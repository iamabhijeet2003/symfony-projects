<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HelloControlerController extends AbstractController
{
    #[Route('/hello', name: 'app_hello_controller')]
    public function index(): Response
    {
        
        return new Response("<html>
        
        <body>
            <h1>Hola</h1>
        </body>
        </html>");
        /*
        return $this->render('hello_controler/index.html.twig', [
            'controller_name' => 'HelloControlerController',
        ]);*/
    }

    #[Route('/main/{name}', name: 'app_main')]
    public function main($name=''): Response
    {
        /*
        return new Response("<html>
        
        <body>
            <h1>Hola</h1>

            <img src='under_construction.gif' />
        </body>
        </html>");*/
        
        return $this->render('hello_controler/hello.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/helloView/{username}', name: 'app_helloView')]
    public function helloView($username=''): Response
    {
        /*
        
        return new Response("<html>
        
        <body>
            <h1>Hola</h1>

            <img src='under_construction.gif' />
        </body>
        </html>");*/
        
        return $this->render('hello_controler/index.html.twig', [
            'controller_name' => 'HelloControlerController',
            'username'=>$username
        ]);
    }

    #[Route('/hola/{usuario}', name: 'app_holaView')]
    public function holaView($usuario=''): Response
    {
    
        return new Response("<h1>Hola $usuario</h1>");
        /*
        return $this->render('hello_controler/index.html.twig', [
            'controller_name' => 'HelloControlerController',
            'usuario'=>$usuario
        ]);*/
    }


    #[Route('/holav/{usuario}', name: 'app_holaView')]
    public function holaViewValencia($usuario=''): Response
    {
    
        return new Response("<h1>Bon dia $usuario</h1>");
        /*
        return $this->render('hello_controler/index.html.twig', [
            'controller_name' => 'HelloControlerController',
            'usuario'=>$usuario
        ]);*/
    }


    #[Route('/tot/{lenguaje}/{usuario}', name: 'view_todo')]
    public function viewIdioma($lenguaje='',$usuario=''): Response
    {
        if($lenguaje=='es'){
            return new Response("<h1>Buenos dias $usuario, <br> vamos a almorzar</h1>");
        }
         if($lenguaje=='ca'){
            return new Response("<h1>Bon dia $usuario, <br> au a esmorzar y 3 chupitets de cassalles</h1>");
        }
        if($lenguaje=='ing'){
            return new Response("<h1>Good morning $usuario, <br> lets go for a breakfast</h1>");
        }
        else{
            return new Response("<h1>pon un idioma es|ca|ing por favor $usuario</h1>");
        }
        
        /*
        return $this->render('hello_controler/index.html.twig', [
            'controller_name' => 'HelloControlerController',
            'usuario'=>$usuario
        ]);*/
    }


    #[Route('/welcome/{user}', name: 'app_welcome')]
    public function welcome1($user=''): Response
    {
        return new Response(
           
                "<h1>Hello $user</h1>"
            
           
        );
    }

    #[Route('/welcome/english', name: 'app_welcome2', priority:1)]
    public function welcomeenglish(): Response
    {
        return new Response(
           
                "<h1>Hello</h1>"
            
           
        );
    }
}
