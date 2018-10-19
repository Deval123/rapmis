<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Fiche_parentsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomPrenomPere')->add('profession')->add('residence')->add('medecinFamille')->add('telPere')->add('emailPere')->add('signature')->add('nomPrenomMere')->add('professionMere')->add('assurancePere')->add('assuranceMere')->add('residenceMere')->add('medecinFamilleMere')->add('telMere')->add('emailMere')->add('signatureMere')->add('nomPrenomTuteur')->add('professionTuteur')->add('assuranceTuteur')->add('residenceTuteur')->add('medecinFamilleTuteur')->add('telTuteur')->add('emailTuteur')->add('signatureTuteur')->add('frereNom1')->add('frereNom2')->add('frereNom3')->add('telFrere1')->add('telFrere2')->add('telFrere3')->add('mailFrere1')->add('mailFrere2')->add('mailFrere3')->add('niveauScolaireFrere1')->add('niveauScolaireFrere2')->add('niveauScolaireFrere3')->add('professionFrere1')->add('professionFrere2')->add('professionFrere3')->add('photo_pere')->add('photo_mere')->add('photo_tuteur')->add('students');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Fiche_parents'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_fiche_parents';
    }


}
