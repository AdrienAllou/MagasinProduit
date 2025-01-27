<?php

namespace App\Form;

use App\Entity\ProduitSearch;
use App\Entity\TypeProduit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitSearchType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('minPrice', IntegerType::class, [
                'required' => false,
                'label' => false,
                'attr'=> [
                    'placeholder' => 'Prix minimum'
                ]
            ])
            ->add('maxPrice', IntegerType::class, [
                'required' => false,
                'label' => false,
                'attr'=> [
                    'placeholder' => 'Prix maximum'
                ]
            ])
            ->add('type', EntityType::class, [
                "class" => TypeProduit::class,
                'required' => false,
                'label' => false,
                'multiple' => true,
                'expanded' => true,
                'placeholder' => 'Type de produit'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ProduitSearch::class,
            'method'=> 'get',
            'csrf_protection'=> false,
        ]);
    }
}
