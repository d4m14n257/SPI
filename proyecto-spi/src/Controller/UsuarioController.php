<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\Usuario;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UsuarioController extends AbstractController
{
    /**
     * @Route("/usuario", name="usuario")
     */

    public function index(): Response
    {
        $users = $this->obtenerUsuarios();
        return $this->render('usuario/index.html.twig', [
            'controller_name' => 'UsuarioController',
            'page_title' => 'Usuarios',
            'usuarios' => $users
        ]);
    }

    public function obtenerUsuarios(){
        $users= [['nombre'=>'Ariel Ramirez','telefono'=>'9874562136','rol'=>'Admin'], 
                 ['nombre'=>'Bruno Juárez', 'telefono'=>'9514562136', 'rol'=>'Supervisor']
                ];
        // $users = new Usuario();

        return $users;
    }

    public function crearUsuario(){
        $user = new Usuario(); 
        $form = $this->createFormBuilder($user)
                     ->setMethod('POST')
                     ->add('nombre', TextType::class,[
                           'attr' => ['type'=>'text',
                                      'placeholder'=>'Nombre',
                                      'class' => 'form-control'
                                     ]
                     ])
                     ->add('apellidos', TextType::class,[
                           'attr' => ['type'=>'text',
                                      'placeholder'=>'Apellidos',
                                      'class' => 'form-control'
                                     ]
                     ])
                     ->add('telefono', TextType::class,[
                           'attr' => ['type'=>'text',
                                      'placeholder'=>'Número de teléfono',
                                      'class' => 'form-control'
                                     ]
                     ])
                     ->add('ine', TextType::class,[
                           'attr' => ['type'=>'text',
                                      'placeholder'=>'INE',
                                      'class' => 'form-control'
                                     ]
                     ])
                     ->add('rol', ChoiceType::class,[
                           'choices' => [
                                      'Administrador'=>false,
                                      'Bodeguero'=>false,
                                      'Supervisor' => true
                           ],
                           'attr' => [
                                      'class' => 'form-control'
                                     ]                           
                     ])
                     ->add('submit', SubmitType::class,[
                           'attr' => ['type'=>'submit',
                                      'class' => 'btn btn-primary'
                                     ]
                     ])
                     ->getForm();
        return $this->render('usuario/createUser.html.twig',[
            'controller_name' => 'UsuarioController',
            'form'=> $form->createView(),
            'page_title' => 'Añadir usuario',
        ]);
    }
}
