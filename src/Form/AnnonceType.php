<?php

namespace App\Form;

use App\Entity\Annonce;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class AnnonceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, ['required' => true,'constraints' => new NotBlank()])
            ->add('content',TextType::class,['required' => true,'constraints' => new NotBlank()])
            ->add('modele',TextType::class,['required' => true,'constraints' => new NotBlank()])
           // ->add('category_id',IntegerType::class,['required' => true,'constraints' => new NotBlank()])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Annonce::class,
            'csrf_protection' => false,
            'allow_extra_fields' => true
        ]);
    }
}
