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
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'Permisos' => ['Permiso1', 'Permiso2', 'Permiso3', 'Permiso4'], 
            'usuario' => 'Erick Saúl Guzmán Ramos', 
            'rol' => 'RolAssigned'
        ]);
    }
}
