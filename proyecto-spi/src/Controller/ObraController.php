<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\Type\NewObra;
use App\Entity\Ubicacion;
use App\Entity\Obra;

class ObraController extends AbstractController
{
    /**
     * @Route("/obra", name="obra")
     */
    public function index(Request $request): Response
    {
        $obras = $this->getDoctrine()
                      ->getRepository(Obra::class)
                      ->findAll();

        $ObraNueva = new Obra();
        $UbicacionObraNueva = new Ubicacion;
        $ObraNueva->setUbicacion($UbicacionObraNueva);
        
        $form = $this->createForm(NewObra::class, $ObraNueva);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $ObraNueva = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($ObraNueva->getUbicacion());
            $entityManager->persist($ObraNueva);
            $entityManager->flush();
            return $this->redirectToRoute('obra');
        }

        return $this->render('obra/index.html.twig', [
            'controller_name' => 'ObraController',
            'page_title' => 'Obras', 
            'Obras_Activas' => $obras,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/obra/details/{Obra_ID}", name="obr-view-det")
     */
    public function obraDet(string $Obra_ID): Response
    {
        $repository = $this->getDoctrine()->getRepository(Obra::class);
        $obra = $repository->find($Obra_ID);

        return $this->render('obra/details.html.twig', [
            'controller_name' => 'ObraController',
            'page_title' => 'Detalles de la obra: ',
            'Obra' => $obra
        ]);
    }
}