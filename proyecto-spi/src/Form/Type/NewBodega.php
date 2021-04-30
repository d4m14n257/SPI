<?php

namespace App\Form\Type;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Doctrine\ORM\EntityRepository;
use App\Form\UbicacionType;
use App\Entity\Usuario;

class NewBodega extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('Nombre', TextType::class, ['label' => 'Nombre de la Bodega'])
                ->add('Descripcion', TextareaType::class)
                ->add('Usuario', EntityType::class, [
                    'class' => Usuario::class,
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->orderBy('u.apellidos', 'ASC');
                    },
                    'choice_label' => 'NombreCompleto',
                    'label' => 'Usuario encargado'])
                ->add('Telefono', TelType::class, [
                    'label' => 'Número de telefono',
                    'constraints' => [new Length(['max' => 10])],
                    'attr' => [
                        'class' => 'numTel'
                    ],
                ])
                ->add('Ubicacion', UbicacionType::class, [
                    'label' => false,    
                ])
                ->add('Cancel', ResetType::class, ['label' => 'Cancelar',
                                                   'attr' => [
                                                       'data-dismiss' => 'modal']])
                ->add('save', SubmitType::class, ['label' => 'Guardar']);
    }
}