<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Repository\ClassesRepository;

class StudentsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $id = $options['dev'];
        $builder
            ->add('classes', EntityType::class, ['label' => 'Choisissez une classe :',
                'required'      => true,
                'class'         => 'AppBundle:Classes',
                'query_builder' => function (ClassesRepository $er) use ($id) {
                    return $er->getClassesPerSchool($id);
                },
                'attr'   => ['class' => 'form-control'] ])
            ->add('name')
            ->add('prenom', null, array('label'=>'firstname'))
            ->add('pere')
            ->add('mere')
            ->add('tuteur')
            ->add('telPere')
            ->add('telMere')
            ->add('telTuteur')
            ->add('emailPere')
            ->add('emailMere')
            ->add('emailTuteur')
            ->add('profPere')
            ->add('profMere')
            ->add('profTuteur')
            ->add('residenceParents')
            ->add('proche1')
            ->add('telProche1')
            ->add('proche2')
            ->add('telProche2')
            ->add('proche3')
            ->add('telProche3')
            ->add('nouveau')
            ->add('redoublant')
            ->add('etudeDossier')
            ->add('anneeNais')
            ->add('lieuNais')
            ->add('cycle', ChoiceType ::class, array(
                'choices' => array(
                    '1ère cycle' => '1ère cycle',
                    'Second cycle' => 'Second cycle',
                ),
                'preferred_choices' => array('muppets', 'arr'),
            ))
            ->add('serie')
            ->add('moyPassageClasse')
            ->add('rang')
            ->add('lastSchool')
            ->add('nameChefLastSchool')
            ->add('sexe', ChoiceType ::class, array(
                'choices' => array(
                    'Masculin' => 'Masculin',
                    'Féminin' => 'Féminin',
                ),
                'preferred_choices' => array('muppets', 'arr'),
            ))
            ->add('dateCreate', 'datetime', array('label' => 'Date d\'inscription', 'required' => false))
            ->add('groupeSanguin')
            ->add('pathogieParticuliere')
            ->add('allergieAlimentaire')
            ->add('allergieMedicamenteuse')
            ->add('dispense')
            ->add('medecinFamiliale')
            ->add('telMedecinFamiliale')
            ->add('assuranceFamille')
            ->add('hopitalAgree')
            ->add('rhesus')
            ->add('inaptitude')
            ->add('file', FileType::class, array('label' => 'Photo', 'required' => false));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        /*$resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Students'
        ));*/

        $resolver->setRequired(['dev']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_students';
    }


}
