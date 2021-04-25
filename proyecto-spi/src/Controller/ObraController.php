<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ObraController extends AbstractController
{
    /**
     * @Route("/obra", name="obra")
     */
    public function index(): Response
    {
        $obrasActivas = ['Nombre Obra 1', 
                         'Nombre Obra 2', 
                         'Nombre Obra 3', 
                         'Nombre Obra 4', 
                         'Nombre Obra 5'
                        ];

        return $this->render('obra/index.html.twig', [
            'controller_name' => 'ObraController',
            'page_title' => 'Obras', 
            'OBRAS' => $obrasActivas
        ]);
    }

    /**
     * @Route("/obra/det/{Obra_ID}", name="obr-view-det")
     */
    public function obraDet(string $Obra_ID): Response
    {
        return $this->render('obra/details.html.twig', [
            'controller_name' => 'ObraController',
            'page_title' => 'Detalles de la obra: ',
            'ID_OBRA' => $Obra_ID
        ]);
    }
}
