<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Obra;
use App\Entity\Ubicacion;
use ArrayObject;

class ObraController extends AbstractController
{
    /**
     * @Route("/obra", name="obra")
     */
    public function index(): Response
    {
        $obras = new ArrayObject();
        for($i = 0; $i < 15; $i++){
            $obraA = new Obra();
            $obraA->setDependenciaContratos("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper pellentesque interdum. Nulla pellentesque quam risus, eget ornare diam pharetra at. Proin laoreet, augue eu bibendum facilisis, risus ante sodales lectus, in viverra elit magna sit amet leo. Etiam eget diam sit amet libero volutpat commodo. Morbi nulla massa, interdum ut pharetra ut, cursus ac purus. Morbi ac erat justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

            Aliquam erat volutpat. Quisque scelerisque augue elit, et congue purus rutrum quis. Vestibulum sed turpis ut diam convallis maximus. Donec ut augue non nunc rhoncus faucibus. Fusce tincidunt et neque eu mollis. In eu ante vehicula, dapibus sapien vitae, consequat neque. Maecenas et orci non erat venenatis pretium et ac libero. Nullam vel porttitor velit. Etiam urna nibh, semper nec euismod ut, porta eu ante. Sed id erat nisi. Maecenas vitae sapien ut dolor rutrum feugiat. Etiam eleifend turpis non eros tincidunt tempor. Nulla dapibus odio erat, mattis venenatis sem posuere sed. ".$i);
            $obraA->setDependenciaEjecutora("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper pellentesque interdum. Nulla pellentesque quam risus, eget ornare diam pharetra at. Proin laoreet, augue eu bibendum facilisis, risus ante sodales lectus, in viverra elit magna sit amet leo. Etiam eget diam sit amet libero volutpat commodo. Morbi nulla massa, interdum ut pharetra ut, cursus ac purus. Morbi ac erat justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

            Aliquam erat volutpat. Quisque scelerisque augue elit, et congue purus rutrum quis. Vestibulum sed turpis ut diam convallis maximus. Donec ut augue non nunc rhoncus faucibus. Fusce tincidunt et neque eu mollis. In eu ante vehicula, dapibus sapien vitae, consequat neque. Maecenas et orci non erat venenatis pretium et ac libero. Nullam vel porttitor velit. Etiam urna nibh, semper nec euismod ut, porta eu ante. Sed id erat nisi. Maecenas vitae sapien ut dolor rutrum feugiat. Etiam eleifend turpis non eros tincidunt tempor. Nulla dapibus odio erat, mattis venenatis sem posuere sed. ".$i);
            $obraA->setContratoProyecto("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper pellentesque interdum. Nulla pellentesque quam risus, eget ornare diam pharetra at. Proin laoreet, augue eu bibendum facilisis, risus ante sodales lectus, in viverra elit magna sit amet leo. Etiam eget diam sit amet libero volutpat commodo. Morbi nulla massa, interdum ut pharetra ut, cursus ac purus. Morbi ac erat justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

            Aliquam erat volutpat. Quisque scelerisque augue elit, et congue purus rutrum quis. Vestibulum sed turpis ut diam convallis maximus. Donec ut augue non nunc rhoncus faucibus. Fusce tincidunt et neque eu mollis. In eu ante vehicula, dapibus sapien vitae, consequat neque. Maecenas et orci non erat venenatis pretium et ac libero. Nullam vel porttitor velit. Etiam urna nibh, semper nec euismod ut, porta eu ante. Sed id erat nisi. Maecenas vitae sapien ut dolor rutrum feugiat. Etiam eleifend turpis non eros tincidunt tempor. Nulla dapibus odio erat, mattis venenatis sem posuere sed. ".$i);
            
            $obras->append($obraA);
        }

        return $this->render('obra/index.html.twig', [
            'controller_name' => 'ObraController',
            'page_title' => 'Obras', 
            'Obras_Activas' => $obras
        ]);
    }

    /**
     * @Route("/obra/details/{Obra_ID}", name="obr-view-det")
     */
    public function obraDet(string $Obra_ID): Response
    {
        $obraA = new Obra();
        $obraA->setDependenciaContratos("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper pellentesque interdum. Nulla pellentesque quam risus, eget ornare diam pharetra at. Proin laoreet, augue eu bibendum facilisis, risus ante sodales lectus, in viverra elit magna sit amet leo. Etiam eget diam sit amet libero volutpat commodo. Morbi nulla massa, interdum ut pharetra ut, cursus ac purus. Morbi ac erat justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.");
        $obraA->setDependenciaEjecutora("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper pellentesque interdum. Nulla pellentesque quam risus, eget ornare diam pharetra at. Proin laoreet, augue eu bibendum facilisis, risus ante sodales lectus, in viverra elit magna sit amet leo. Etiam eget diam sit amet libero volutpat commodo. Morbi nulla massa, interdum ut pharetra ut, cursus ac purus. Morbi ac erat justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.");
        $obraA->setContratoProyecto("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ullamcorper pellentesque interdum. Nulla pellentesque quam risus, eget ornare diam pharetra at. Proin laoreet, augue eu bibendum facilisis, risus ante sodales lectus, in viverra elit magna sit amet leo. Etiam eget diam sit amet libero volutpat commodo. Morbi nulla massa, interdum ut pharetra ut, cursus ac purus. Morbi ac erat justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.");
        $UbObraA = new Ubicacion;
        $UbObraA->setCalle("Calle Ob");
        $UbObraA->setNumero(10);
        $UbObraA->setColonia("Colonia Ob");
        $UbObraA->setCp("#####");
        $UbObraA->setMunicipio("Municipio Ob");
        $UbObraA->setLocalidad("Localidad Ob");
        $obraA->setUbicacion($UbObraA);

        return $this->render('obra/details.html.twig', [
            'controller_name' => 'ObraController',
            'page_title' => 'Detalles de la obra: ',
            'Obra' => $obraA,
            'Obra_ID' => $Obra_ID
        ]);
    }
}
