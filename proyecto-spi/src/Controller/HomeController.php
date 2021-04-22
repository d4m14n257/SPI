<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public static $ans = "Alcachofa";
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {

        //Esto iria en LOGIN
            setcookie("user", "Erick Saúl Guzmán Ramos", time() + 3600);
            setcookie("rol", "Bodeguero", time() + 3600);
        // // // // // // // //

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController'
        ]);
    }
}
