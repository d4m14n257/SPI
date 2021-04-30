<?php

namespace App\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Doctrine\ORM\EntityRepository;
use App\Form\UbicacionType;
use App\Entity\Usuario;

class NewObra extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('Nombre', TextType::class, ['label' => 'Nombre de la obra'])
                ->add('Descripcion', TextareaType::class)
                ->add('Usuario', EntityType::class, [
                    'class' => Usuario::class,
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->orderBy('u.nombre', 'ASC');
                    },
                    'choice_label' => 'nombre',
                    'label' => 'Usuario encargado'])
                ->add('FechaInicio', DateType::class, [
                    'widget' => 'single_text'
                ])
                ->add('FechaEntrega', DateType::class, [
                    'widget' => 'single_text'
                ])
                ->add('Ubicacion', UbicacionType::class,[
                    'label' => false, 
                ])
                ->add('DependenciaContratos', TextareaType::class)
                ->add('DependenciaEjecutora', TextareaType::class)
                ->add('ContratoProyecto', TextareaType::class)
                ->add('Cancel', ResetType::class, ['label' => 'Cancelar',
                                                   'attr' => [
                                                       'data-dismiss' => 'modal']])
                ->add('save', SubmitType::class, ['label' => 'Guardar']);
    }
}