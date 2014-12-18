<?php

namespace Tresepic\BoprBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BannerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', 'text', array(
        		'required' => true,
        		'label'    => 'Nombre'
        ))
        ->add('priority', 'text', array(
        		'required' => true,
        		'label'    => 'Prioridad'
        ))
        ->add('link', 'text', array(
        		'required' => true,
        		'label'    => 'Link'
        ))
        ->add('file', 'file', array(
        		'required' => true,
        		'label'    => 'Imagen'
        ));
    }

    public function getName()
    {
        return 'bopr_banner';
    }
}
