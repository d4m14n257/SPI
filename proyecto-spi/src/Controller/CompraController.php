<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompraController extends AbstractController
{
    /**
     * @Route("/compra", name="compra")
     */
    public function index(): Response
    {
        return $this->render('compra/index.html.twig', [
            'controller_name' => 'CompraController',
            'page_title' => 'Compras'
        ]);
    }
}
