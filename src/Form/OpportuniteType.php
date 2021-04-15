<?php

namespace App\Form;

use App\Entity\Opportunite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OpportuniteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('image')
            ->add('dateLimite')
            ->add('region')
            ->add('domaineConcerne')
            ->add('lienFormPostul')
            ->add('description')
            ->add('TypeOffre')
            ->add('lanceur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Opportunite::class,
        ]);
    }
}
