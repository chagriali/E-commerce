<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom',null,array('attr' =>  array( 'placeholder' => 'form.info.nom' ),'translation_domain' => 'AppBundle'));
        $builder->add('prenom',null,array('attr' =>  array( 'placeholder' => 'form.info.prenom' ),'translation_domain' => 'AppBundle'))->remove('username')
            ->add('tel',null,array('attr' =>  array( 'placeholder' => 'form.info.tel' ),'translation_domain' => 'AppBundle'))
            ->add('sexe',ChoiceType::class ,array(
                'choices'  => array(
                    'form.sexe.homme' => 'H',
                    'form.sexe.femme' => 'F',
                ),'translation_domain' => 'AppBundle', 'choices_as_values' => true,'multiple'=>false,'expanded'=>true))->add('adresse',AdresseType::class);
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}