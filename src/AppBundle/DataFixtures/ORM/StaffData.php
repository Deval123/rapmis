<?php
// src/AppBundle/DataFixtures/ORM/StaffData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Staff;

class StaffData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $staff1 = new Staff();
        $staff1->setName('Jane Doe');
        $staff1->setEtablissements($this->getReference('etablissements2'));
        $staff1->setTel('678542879');
        $staff1->setMail('staff1@staff1.com');
        $staff1->setFonction('Surveillant');
        $staff1->setSexe('F');
        $staff1->setDateCreate(new \DateTime());
        $staff1->setFilename("image17.png");
        $manager->persist($staff1);

        $staff2 = new Staff();
        $staff2->setName('Sarah Joelle');
        $staff2->setEtablissements($this->getReference('etablissements2'));
        $staff2->setTel('676523849');
        $staff2->setMail('Sarah@Sarah.com');
        $staff2->setFonction('Censeurs 1');
        $staff2->setSexe('F');
        $staff2->setDateCreate(new \DateTime());
        $staff2->setFilename("image1.png");
        $manager->persist($staff2);

        $staff3 = new Staff();
        $staff3->setName('TSafack Honoré');
        $staff3->setEtablissements($this->getReference('etablissements2'));
        $staff3->setTel('253265846');
        $staff3->setMail('TSafack@TSafack.com');
        $staff3->setFonction('Surveillant Secteur 1');
        $staff3->setSexe('M');
        $staff3->setDateCreate(new \DateTime());
        $staff3->setFilename("image2.png");
        $manager->persist($staff3);

        $staff4 = new Staff();
        $staff4->setName('Kamdem  Joe');
        $staff4->setEtablissements($this->getReference('etablissements2'));
        $staff4->setTel('356332287');
        $staff4->setMail('Joe@Joe.fr');
        $staff4->setFonction('infimière');
        $staff4->setSexe('M');
        $staff4->setDateCreate(new \DateTime());
        $staff4->setFilename("image3.png");
        $manager->persist($staff4);

        $staff5 = new Staff();
        $staff5->setName('Ndomgang Brice');
        $staff5->setEtablissements($this->getReference('etablissements2'));
        $staff5->setTel('695965287');
        $staff5->setMail('Brice@Brice.fr');
        $staff5->setFonction('Provisseur');
        $staff5->setSexe('M');
        $staff5->setDateCreate(new \DateTime());
        $staff5->setFilename("image4.png");
        $manager->persist($staff5);

        $staff6 = new Staff();
        $staff6->setName('Jane Doe');
        $staff6->setEtablissements($this->getReference('etablissements2'));
        $staff6->setTel('678542879');
        $staff6->setMail('staff1@staff1.com');
        $staff6->setFonction('Surveillant');
        $staff6->setSexe('M');
        $staff6->setDateCreate(new \DateTime());
        $staff6->setFilename("image5.png");
        $manager->persist($staff6);

        $staff7 = new Staff();
        $staff7->setName('Anita Mamaha');
        $staff7->setEtablissements($this->getReference('etablissements2'));
        $staff7->setTel('687548210');
        $staff7->setMail('Anita@Anita.com');
        $staff7->setFonction('Assistante de direction');
        $staff7->setSexe('F');
        $staff7->setDateCreate(new \DateTime());
        $staff7->setFilename("dp.jpg");
        $manager->persist($staff7);

        $staff8 = new Staff();
        $staff8->setName('Teukap Jean');
        $staff8->setEtablissements($this->getReference('etablissements2'));
        $staff8->setTel('678542879');
        $staff8->setMail('Jean@Jean.com');
        $staff8->setFonction('Technicien Laboratoire');
        $staff8->setSexe('M');
        $staff8->setDateCreate(new \DateTime());
        $staff8->setFilename("image7.png");
        $manager->persist($staff8);

        $staff9 = new Staff();
        $staff9->setName('Domche Michèlle');
        $staff9->setEtablissements($this->getReference('etablissements2'));
        $staff9->setTel('678542879');
        $staff9->setMail('Domche@Domche.com');
        $staff9->setFonction('Censeurs 2');
        $staff9->setSexe('F');
        $staff9->setDateCreate(new \DateTime());
        $staff9->setFilename("image8.png");
        $manager->persist($staff9);

        $staff10 = new Staff();
        $staff10->setName('Kamguia Dév');
        $staff10->setEtablissements($this->getReference('etablissements2'));
        $staff10->setTel('228547856');
        $staff10->setMail('Dév@Dév.com');
        $staff10->setFonction('Virgil');
        $staff10->setSexe('M');
        $staff10->setDateCreate(new \DateTime());
        $staff10->setFilename("image9.png");
        $manager->persist($staff10);

        $staff11 = new Staff();
        $staff11->setName('Kam Deval');
        $staff11->setEtablissements($this->getReference('etablissements2'));
        $staff11->setTel('678542879');
        $staff11->setMail('Deval@Deval.com');
        $staff11->setFonction('Surveillant');
        $staff11->setSexe('M');
        $staff11->setDateCreate(new \DateTime());
        $staff11->setFilename("image10.png");
        $manager->persist($staff11);

        $staff12 = new Staff();
        $staff12->setName('Nakmanou flore');
        $staff12->setEtablissements($this->getReference('etablissements2'));
        $staff12->setTel('670162957');
        $staff12->setMail('flore@flore.fr');
        $staff12->setFonction('Chef d’ateliers ');
        $staff12->setSexe('F');
        $staff12->setDateCreate(new \DateTime());
        $staff12->setFilename("flore.png");
        $manager->persist($staff12);

        $staff13 = new Staff();
        $staff13->setName('Kameni Jeannine');
        $staff13->setEtablissements($this->getReference('etablissements2'));
        $staff13->setTel('694965269');
        $staff13->setMail('Jeannine@Jeannine.cm');
        $staff13->setFonction('Assistante sociale ');
        $staff13->setSexe('F');
        $staff13->setDateCreate(new \DateTime());
        $staff13->setFilename("download (12).jpg");
        $manager->persist($staff13);

        $staff14 = new Staff();
        $staff14->setName('Mbarga Lorose Joelle');
        $staff14->setEtablissements($this->getReference('etablissements2'));
        $staff14->setTel('696385893');
        $staff14->setMail('Lorose@Lorose.com');
        $staff14->setFonction('Corps médical ');
        $staff14->setSexe('F');
        $staff14->setDateCreate(new \DateTime());
        $staff14->setFilename("image11.jpg");
        $manager->persist($staff14);

        $staff15 = new Staff();
        $staff15->setName('Madiesse Estelle Amelie');
        $staff15->setEtablissements($this->getReference('etablissements2'));
        $staff15->setTel('223587485');
        $staff15->setMail('Estelle@Estelle.com');
        $staff15->setFonction("Chef d’établissement ");
        $staff15->setSexe('F');
        $staff15->setDateCreate(new \DateTime());
        $staff15->setFilename("image12.jpg");
        $manager->persist($staff15);

        $staff16 = new Staff();
        $staff16->setName('Kouam Diane');
        $staff16->setEtablissements($this->getReference('etablissements2'));
        $staff16->setTel('678542879');
        $staff16->setMail('Diane@Diane.com');
        $staff16->setFonction('Surveillants secteur ');
        $staff16->setSexe('F');
        $staff16->setDateCreate(new \DateTime());
        $staff16->setFilename("image14.jpg");
        $manager->persist($staff16);

        $staff17 = new Staff();
        $staff17->setName('Tchuendem Jasmine');
        $staff17->setEtablissements($this->getReference('etablissements2'));
        $staff17->setTel('3358622014');
        $staff17->setMail('Jasmine@Jasmine.com');
        $staff17->setFonction('Censeurs 3');
        $staff17->setSexe('F');
        $staff17->setDateCreate(new \DateTime());
        $staff17->setFilename("image15.jpg");
        $manager->persist($staff17);

        $staff18 = new Staff();
        $staff18->setName('Jipgang Cirile');
        $staff18->setEtablissements($this->getReference('etablissements2'));
        $staff18->setTel('678542879');
        $staff18->setMail('Cirile@Cirile.com');
        $staff18->setFonction('Gardiens ');
        $staff18->setSexe('M');
        $staff18->setDateCreate(new \DateTime());
        $staff18->setFilename("image16.png");
        $manager->persist($staff18);

        $staff19 = new Staff();
        $staff19->setName('Zeko Alain');
        $staff19->setEtablissements($this->getReference('etablissements2'));
        $staff19->setTel('678542879');
        $staff19->setMail('Zeko@Zeko.com');
        $staff19->setFonction('Technicien Labo ');
        $staff19->setSexe('M');
        $staff19->setDateCreate(new \DateTime());
        $staff19->setFilename("image6.png");
        $manager->persist($staff19);



        $manager->flush();

        $this->addReference('staff1', $staff1);
        $this->addReference('staff2', $staff2);
        $this->addReference('staff3', $staff3);
        $this->addReference('staff4', $staff4);
        $this->addReference('staff5', $staff5);
        $this->addReference('staff6', $staff6);
        $this->addReference('staff7', $staff7);
        $this->addReference('staff8', $staff8);
        $this->addReference('staff9', $staff9);
        $this->addReference('staff10', $staff10);
        $this->addReference('staff11', $staff11);
        $this->addReference('staff12', $staff12);
        $this->addReference('staff13', $staff13);
        $this->addReference('staff14', $staff14);
        $this->addReference('staff15', $staff15);
        $this->addReference('staff16', $staff16);
        $this->addReference('staff17', $staff17);
        $this->addReference('staff18', $staff18);
        $this->addReference('satff19', $staff19);
    }

}