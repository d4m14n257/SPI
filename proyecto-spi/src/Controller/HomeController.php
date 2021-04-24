<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public static $ans = "Alcachofa";
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'page_title' => 'Página de Inicio'
        ]);
    }

    /**
     * @Route("/", name="login")
     */
    public function login(): Response
    {
         //Esto iria en LOGIN
         setcookie("user", "Erick Saúl Guzmán Ramos", time() + 3600);
         setcookie("rol", "Root", time() + 3600);
        // // // // // // // //
        return $this->render('login.html.twig', [
            'controller_name' => 'LoginController',
            'page_title' => 'Login'
        ]);
    }
}
