<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Students;

class NotesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('students')
            ->add('nomEvaluation', ChoiceType ::class, array(
                'choices' => array(
                    '1ère sequence' => 'sequence 1',
                    '2eme sequence' => 'sequence 2',
                    '3eme sequence' => 'sequence 3',
                    '4eme sequence' => 'sequence 4',
                    '5eme sequence' => 'sequence 5',
                    '6eme sequence' => 'sequence 6',
                    'Travaux pratique ' => 'TP',
                    'Devoir à domicile ' => 'devoir à domicile',
                    'autres ' => 'autre',

                ),
                'preferred_choices' => array('muppets', 'arr'),
            ))
            ->add('matieres')
            ->add('valeur')
            ->add('coeff')
            ->add('commentaire');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Notes'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_notes';
    }


}
