<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                "attr" => ["placeholder" => "Votre email"]
            ])
            ->add('username', TextType::class,[
                "attr" => ["placeholder" => "Quel est votre nom"]
            ])
            ->add('password', PasswordType::class,[
                "attr" => ["placeholder" => "Quel est votre mot de passe"],
                "constraints" => [
                    new Assert\Length([
                        'min' => 6,
                        'minMessage' => 'Your first name must be at least {{ limit }} characters long',
                        'allowEmptyString' => false,
                    ])
                ]
            ])
            ->add('adresse', TextType::class, [
                "attr" => ["placeholder" => "Votre adresse"]
            ])
            ->add('Ville', TextType::class, [
                "attr" => ["placeholder" => "Votre ville"]
            ])
            ->add('CodePostal', NumberType::class,  [
                "attr" => ["placeholder" => "Votre code postal"],
                "invalid_message" => "Vous devez remplir le code postal",
                "constraints" => [
                    new Assert\Length([
                        'min' => 5,
                        'max' => 5,
                        'minMessage' => 'Your first name must be at least {{ limit }} characters long',
                        'maxMessage' => 'Your first name cannot be longer than {{ limit }} characters',
                        'allowEmptyString' => false,
                    ])
                ]
            ])
            ->add("Validation", SubmitType::class,[
                "attr" => ["class" => "btn btn-primary"]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
