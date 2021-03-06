<?php

namespace AppBundle\Form;

use AppBundle\Entity\Addresses;
use AppBundle\Entity\City;
use AppBundle\Entity\Country;
use AppBundle\Entity\Department;
use AppBundle\Entity\Regions;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EtablissementsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('sigle')
            ->add('sectioneduc')
            // ->add('dateCreation')
            ->add('description', 'textarea', ['required' => false])
            ->add('adresses', AddressesType::class, array('required' => true))
            ->add('file', FileType::class ,  ['required' => false])

            ->add('country', EntityType::class, array(
                'class'=>'AppBundle\Entity\Country',
                'placeholder'=>'selectionnez le pays',
                'mapped'=>false,
                'required'=>false
            ));

        $builder->get('country')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event){
                /*dump($event->getForm());
                dump($event->getForm()->getData());*/
                $form = $event->getForm();
                $this->addRegionField($form->getParent(), $form->getData());



            }
        );

        $builder->addEventListener(
            FormEvents::POST_SET_DATA,
            function (FormEvent $event){
                $data = $event->getData();
                //dump($data);

                /* @var $city City */

                $city = $data->getCity();
                $form = $event->getForm();
                if($city){
                    $departments = $city->getDepartments();
                    $regions = $departments->getRegions();
                    $country = $regions->getCountry();
                    $this->addRegionField($form, $country);
                    $this->addDepartmentField($form, $regions);
                    $this->addCityField($form, $departments);
                    //on préremplir ce qu'on a trouvé dans la base de donnée
                    $form->get('country')->setData($country);
                    $form->get('regions')->setData($regions);
                    $form->get('departments')->setData($departments);

                }
                 else{
                     $this->addRegionField($form, null);
                     $this->addDepartmentField($form, null);
                     $this->addCityField($form, null);
                 }
            }
        );
    }

    /**
     * Rajoute le champs region au formulaire
     * @param FormInterface $form
     * @param Country $country
     */
    private function addRegionField(FormInterface $form, ? Country $country){
        $builder = $form->getConfig()->getFormFactory()->createNamedBuilder(
            'regions',
            EntityType::class,
            null,
            array(
                'class'=>'AppBundle\Entity\Regions',
                'placeholder'=> $country ? 'Sélectionnez la region' : 'Sélectionnez le pays',
                'mapped'=>false,
                'required'=>false,
                'auto_initialize' => false,
                'choices' => $country ? $country->getRegions() : []
            )
        );

        $builder->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event){
                //dump($event->getForm());
                $form = $event->getForm();
                $this->addDepartmentField($form->getParent(), $form->getData());
            }
        );
        $form->add($builder->getForm());
    }

    /**
     * Rajoute le champs department au formulaire
     * @param FormInterface $form
     * @param Regions $regions
     */
    private function addDepartmentField(FormInterface $form, ? Regions $regions){
        $builder = $form->getConfig()->getFormFactory()->createNamedBuilder(
            'departments',
            EntityType::class,
            null,
            array(
                'class'=>'AppBundle\Entity\Department',
                'placeholder'=> $regions ? 'sélectionnez le département' : 'Sélectionnez la région',
                'mapped'=>false,
                'required'=>false,
                'auto_initialize' => false,
                'choices' => $regions ? $regions->getDepartments() : []
            )
        );

        $builder->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event){
                $form = $event->getForm();
                $this->addCityField($form->getParent(), $form->getData());
            }
        );
        $form->add($builder->getForm());
    }

    /**
     * Rajoute le champs city au formulaire
     * @param FormInterface $form
     * @param Department $departments
     */
    private function addCityField(FormInterface $form, ? Department $departments){

        $form->add('city', EntityType::class, array(
            'class' => 'AppBundle\Entity\City',
            'placeholder'=> $departments ? 'sélectionnez la ville' : 'sélectionnez le département',
            'choices' => $departments ? $departments->getCity() : []
        ));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Etablissements'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_etablissements';
    }


}
