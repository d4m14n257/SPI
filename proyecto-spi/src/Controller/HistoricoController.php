<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HistoricoController extends AbstractController
{
    /**
     * @Route("/historico", name="historico")
     */
    public function index(): Response
    {
        return $this->render('historico/index.html.twig', [
            'controller_name' => 'HistoricoController',
            'page_title' => 'Históricos'
        ]);
    }
}
