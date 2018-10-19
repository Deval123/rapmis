<?php

namespace AppBundle\Form;

use AppBundle\Entity\Matieres;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Facteurs_disciplinairesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('students')
            ->add('motif', ChoiceType ::class, array('label'=>'nature de l\'indiscipline',
                'choices' => array(
                    'Retards' => 'Retards',
                    'Absences' => 'Absences en cours',
                    'Sanctions' => 'Sanctions',
                    'Convocations' => 'Convocations parents',
                    'Corvées' => 'Corvées',
                    'Coiffure irrégulière' => 'Coiffure irrégulière',
                    'Tenue non conforme' => 'Tenue non conforme',
                    'Permission fausse' => 'Permission fausse',
                    'Bagarres' => 'Bagarres',
                    'Violence verbale' => 'Violence verbale',
                    'Violence physique' => 'Violence physique',
                    'Jeux de hasard' => 'Jeux de hasard',
                    'Escalade' => 'Escalade',
                    'Agression' => 'Agression',
                    'Drogue et stupéfiants' => 'Drogue et stupéfiants',
                    'Port d’arme blanche' => 'Port d’arme blanche',
                    'Port de pétard' =>'Port de pétard',
                    'Maladie imaginaire' => 'Maladie imaginaire',
                    'Scolarité et autres frais  non payés' => 'Scolarité et autres frais  non payés',
                    'Interdiction d’accès avec motif' => 'Interdiction d’accès avec motif',
                    'Exclusions temporaires' => 'Exclusions temporaires',
                    'Troubles' => 'Troubles en classe',
                    'Devoir non fait ' => 'devoir non fait',
                    'Vadrouille ' => 'Vadrouille ',
                    'Autres ' => 'Autres ',
                ),'preferred_choices' => array('muppets', 'arr'),
            ))
            ->add('lieu')
            ->add('autre', null, ['label'=>'si cela a eu lieu hors des cours'])
            //->add('compteur')
            ->add('description');
            //->add('dateMotif');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Facteurs_disciplinaires'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_facteurs_disciplinaires';
    }


}
