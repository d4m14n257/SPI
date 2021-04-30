<?php

namespace App\Form;


use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use App\Entity\Ubicacion;

class UbicacionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('Calle', TextType::class)
                ->add('Numero', NumberType::class, [
                    'attr' => [
                        'class' => 'numType'
                    ]
                ])
                ->add('Colonia', TextType::class)
                ->add('Cp', TextType::class, [
                    'attr' => [
                        'class' => 'numType CodPost'
                    ]
                ])
                ->add('Municipio', TextType::class)
                ->add('Localidad', TextType::class);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ubicacion::class,
        ]);
    }

}