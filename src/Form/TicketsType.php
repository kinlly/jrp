<?php

namespace App\Form;

use App\Entity\Tickets;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class TicketsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
            $tickets_name = array(
                "adult7","adult14","adult21",
                "adultGreen7","adultGreen14","adultGreen21",
                "child7","child14","child21",
                "childGreen7","childGreen14","childGreen21"
                );
    
            foreach ($tickets_name as $ticket_name)
            {
                $builder->add($ticket_name, ChoiceType::class,
                ['choices' => [
                    0 => "0",1 => "1",2 => "2",3 => "3",4 => "4",5 => "5", 6 => "6",7 => "7",8 => "8",
                ]]);
            } 
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Tickets::class,
        ]);
    }
}
