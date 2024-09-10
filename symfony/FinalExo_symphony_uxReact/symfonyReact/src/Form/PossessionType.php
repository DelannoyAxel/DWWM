<?php

namespace App\Form;

use App\Entity\Possession;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PossessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, [
                'required' => false,
                'label' => 'Nom',
                'attr' => ['class' => 'form-control'] 
            ])
            ->add('Valeur', MoneyType::class, [
                'required' => false,
                'label' => 'Valeur',
                'attr' => ['class' => 'form-control'] 
            ])
            ->add('Type', TextType::class, [
                'required' => false,
                'label' => 'Type',
                'attr' => ['class' => 'form-control'] 
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Possession::class,
        ]);
    }
}
