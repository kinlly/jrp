<?php

namespace App\Form;

use App\Entity\Shipping;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType ;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ShippingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName', TextType::class,[
                'attr' => ['placeholder' => "First Name"],
                'required' => 'required',
            ])
            ->add('surname', TextType::class,[
                'attr' => ['placeholder' => "Surname"],
                'required' => 'required',
            ])
            ->add('streetAddress', TextType::class,[
                'attr' => ['placeholder' => "Provide full address"],
                'required' => 'required',
            ])
            ->add('city', TextType::class,[
                'attr' => ['placeholder' => "City"],
                'required' => 'required',
            ])
            ->add('zipCode', TextType::class,[
                'attr' => ['placeholder' => "Zip Code"],
                'required' => 'required',
            ])
            ->add('country', TextType::class,[
                'attr' => ['placeholder' => "Country"],
                'required' => 'required',
            ])
            ->add('phone', TextType::class,[
                'attr' => ['placeholder' => "Phone Number"],
                'required' => 'required',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Shipping::class,
        ]);
    }
}
