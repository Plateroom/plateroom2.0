<?php

namespace MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class RicettaFormEdit extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome', TextType::class, array('label' => false))
            ->add('dataCreazione', HiddenType::class, array('data' =>date('d-F-Y')),date_default_timezone_set('Europe/Rome'))
            ->add('idCitta', EntityType::class, array('label' => false,
              'class'=>'MainBundle:Citta',
              'choice_label'=>'nome'))
            ->add('descrizione', TextType::class, array('label' => false))
            ->add('imageFile', VichImageType::class)
            ->add('save', SubmitType::class, array('label' => false))
        ;
    }
}
