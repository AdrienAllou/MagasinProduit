<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\TypeProduit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prix')
            ->add('photo', FileType::class, [
                "constraints" => [
                    new File([
                        "maxSize" => "1024k",
                        "mimeTypes" => [
                            "image/png",
                            "image/vnd.sealed.png",
                            "image/vnd.sealedmedia.softseal.jpg",
                            "video/JPEG",
                            "video/jpeg2000"
                        ]
                    ])
                ]
            ])
            ->add('disponible')
            ->add('dateLancement',DateType::class, [
                'format' => 'dd/MM/yyyy',
                'required' => false,
                'html5' => false
            ])
            ->add('stock')
            ->add('typeProduit', EntityType::class, [
                "class" => TypeProduit::class,
                "placeholder" => "Choisir un type de produit"
            ])
            ->add('submit', SubmitType::class, ["label" => "Ajouter"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
