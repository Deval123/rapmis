<?php

namespace AppBundle\Form;

use AppBundle\Entity\Teacher;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Repository\TeacherRepository;
use AppBundle\Repository\ClassesRepository;

class Enseignants_titulaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $id = $options['dev'];
        $builder
            //->add('teacher')
            ->add('teacher', EntityType::class, ['label' => 'Choisissez un enseignant :',
        'required'      => true,
        'class'         => 'AppBundle:Teacher',
        //'choice_label'  => 'number',
        'query_builder' => function (TeacherRepository $er) use ($id) {
        return $er->getTeacherPerSchool($id);
    },
        'attr'   => ['class' => 'form-control'] ])
            //->add('classes')
            ->add('classes', EntityType::class, ['label' => 'Choisissez une classe :',
                'required'      => true,
                'class'         => 'AppBundle:Classes',
                'query_builder' => function (ClassesRepository $er) use ($id) {
                    return $er->getClassesPerSchool($id);
                },
                'attr'   => ['class' => 'form-control'] ])
            ->add('description');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        /*$resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Enseignants_titulaire',

        ));*/

        $resolver->setRequired(['dev']);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_enseignants_titulaire';
    }


}
