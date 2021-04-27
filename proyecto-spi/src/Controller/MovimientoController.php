<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovimientoController extends AbstractController
{
    /**
     * @Route("/movimiento", name="movimiento")
     */
    public function index(): Response
    {
        return $this->render('movimiento/index.html.twig', [
            'controller_name' => 'MovimientoController',
            'page_title' => 'Movimientos'
        ]);
    }
}
