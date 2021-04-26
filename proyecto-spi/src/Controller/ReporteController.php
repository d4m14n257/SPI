<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReporteController extends AbstractController
{
    /**
     * @Route("/reporte", name="reporte")
     */
    public function index(): Response
    {
        // if($view === null) $view = "default";
        return $this->render('reporte/index.html.twig', [
            'controller_name' => 'ReporteController',
            'page_title' => 'Generación de Reportes'
        ]);
    }

    public function form_report(): Response{
        return $this->render('reporte/form_report.html.twig',[]);
    }

}
