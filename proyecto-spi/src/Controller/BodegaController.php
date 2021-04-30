<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\Type\NewBodega;
use App\Entity\Ubicacion;
use App\Entity\Bodega;

class BodegaController extends AbstractController
{
    /**
     * @Route("/bodega", name="bodega")
     */
    public function index(Request $request): Response
    {
        $bodegas = $this->getDoctrine()
                        ->getRepository(Bodega::class)
                        ->findAll();

        $BodegaNueva = new Bodega();
        $UbicacionBodegaNueva = new Ubicacion;
        $BodegaNueva->setUbicacion($UbicacionBodegaNueva);

        $form = $this->createForm(NewBodega::class, $BodegaNueva);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $BodegaNueva = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($BodegaNueva->getUbicacion());
            $entityManager->persist($BodegaNueva);
            $entityManager->flush();
            return $this->redirectToRoute('bodega');
        }

        return $this->render('bodega/index.html.twig', [
            'controller_name' => 'BodegaController',
            'page_title' => 'Bodega',
            'Bodegas_Activas' => $bodegas,
            'form' => $form->createView(),
        ]);
    }
}
