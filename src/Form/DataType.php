<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\OptionsResolver\OptionsResolver;

class DateType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([

        ]);
    }
}
