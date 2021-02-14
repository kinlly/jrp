<?php

namespace App\Form;

use App\Entity\Orders; 
use App\Form\TicketsType;
use App\Form\ShippingType;
use App\Entity\Tickets;
use App\Entity\Shipping;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface; 
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType ;
use Symfony\Component\Form\Extension\Core\Type\DateType ;
use Symfony\Component\Form\Extension\Core\Type\EmailType ;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType ;
use Symfony\Component\OptionsResolver\OptionsResolver; 

class OrdersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('tickets',TicketsType::class)    
        ->add('email', EmailType::class,[
            'attr' => ['placeholder' => "Please provide your email"],
            'required' => 'required',
        ])
        ->add('dateTravel', DateType::class,[ 
            'html5' => false, 
            'widget' => 'single_text',
            'format' => 'yyyy-MM-dd',
            'attr' => ['class' => 'input_datepicker','value'=>date("Y-m-d"), 'type'=>'date', 'min'=>"2021-02-01" ,  'max'=>"2021-03-01", 'step'=>'1'],
        ]) 
        ->add('shipping',ShippingType::class)   
        ->add('guide', ChoiceType::class,[
            'choices' => [ "Select an option" => '' ,"Yes" => 1 ,"No, thanks" => 0],
            'required' => 'required',
            'choice_attr' => ['Select an option*' => ['disabled'=>'']]
            ])
        ->add('pocket_wifi',ChoiceType::class,[
            'choices' => [ "Select an option" => '' ,"Yes" => 1 ,"No, thanks" => 0],
            'required' => 'required',
            'choice_attr' => ['Select an option*' => ['disabled'=>'']]
            ]) 
        ->add('created_at', DateTimeType::class,[ 
            'html5' => false,
            'attr' => [
                'class' => 'combinedPickerInput',
                'placeholder' => date('Y-m-d H:i:s'),
                'value' => date('Y-m-d H:i:s'),
            ],
            'format' => 'yyyy-MM-dd H:i:s',  
            'required' => false,
        ])
        

            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Orders::class,
        ]);
    }
}
