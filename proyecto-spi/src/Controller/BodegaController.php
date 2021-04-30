<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BodegaController extends AbstractController
{
    /**
     * @Route("/bodega", name="bodega")
     */
    public function index(): Response
    {
        return $this->render('bodega/index.html.twig', [
            'controller_name' => 'BodegaController',
            'page_title' => 'Bodega'
        ]);
    }

    public function addBodega() {
        
    }
}
