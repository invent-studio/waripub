<?php
// src/Waripub/MainBundle/Form/RegistrationType.php

namespace Waripub\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Waripub\MainBundle\Entity\User;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom');
        $builder->add('tel');
        $builder->add('lienfb',null,array('required'=> false));
        $builder->add('lientwitter',null,array('required'=> false));
        $builder->add('lieninstagram',null,array('required'=> false));
        $builder->add('description',null ,array('required'=> false));

        //Souscripteur
        $builder->add('nbabonnefb',null,array('required'=> false));
        $builder->add('nbabonnetwitter',null,array('required'=> false));
        $builder->add('nbabonneinstagram',null,array('required'=> false));

        //Prestataire
        $builder->add('rccm',null,array('required'=> false));
        $builder->add('nomrepresentant',null,array('required'=> false));
        $builder->add('telrepresentant',null,array('required'=> false));
        $builder->add('emailrepresentant',null,array('required'=> false));

    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}