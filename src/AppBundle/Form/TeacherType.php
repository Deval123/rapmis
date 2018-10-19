<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeacherType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('prenom', null, array('label'=>'firstname'))
            ->add('tel')
            ->add('email')
            ->add('sexe', ChoiceType ::class, array(
                'choices' => array(
                    'Masculin' => 'Masculin',
                    'Féminin' => 'Féminin',
                ),
                'preferred_choices' => array('muppets', 'arr'),
            ))
            ->add('anneeNais')
            //->add('dateCreate')
            //->add('etablissements')
            ->add('matieres')
            ->add('file', FileType::class, array('label'=>'Photo', 'required' => true ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Teacher'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_teacher';
    }


}
