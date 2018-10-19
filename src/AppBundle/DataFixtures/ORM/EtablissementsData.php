<?php
// src/AppBundle/DataFixtures/ORM/UserData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Etablissements;

class EtablissementsData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $etablissements1 = new Etablissements();
        $etablissements1->setName('Collège Bassong');
        $etablissements1->setDescription("un collège d'enseignement général");
        $etablissements1->setAdresses($this->getReference('addresses1'));
        $etablissements1->setCity($this->getReference('city2'));
        $etablissements1->setSectioneduc(array($this->getReference('sectionEduc2')));
        $etablissements1->setSigle("CBas");
        $etablissements1->setFilename('images2.jpg');
        $etablissements1->setType_Etablissements($this->getReference('type_etablissements2'));
        $etablissements1->setDateCreation(new \DateTime());
        $manager->persist($etablissements1);

        $etablissements2 = new Etablissements();
        $etablissements2->setName('institut privé polivalent de baham');
        $etablissements2->setDescription("un collège d'enseignement général et technique commercial");
        $etablissements2->setAdresses($this->getReference('addresses2'));
        $etablissements2->setCity($this->getReference('city1'));
        $etablissements2->setSectioneduc(array($this->getReference('sectionEduc1')));
        $etablissements2->setSigle("IPPB");
        $etablissements2->setFilename('download (12).jpg');
        $etablissements2->setType_Etablissements($this->getReference('type_etablissements1'));
        $etablissements2->setDateCreation(new \DateTime());
        $manager->persist($etablissements2);

        $etablissements3 = new Etablissements();
        $etablissements3->setName('Ecole maternelle de yaoundé');
        $etablissements3->setDescription("enseignement maternelle");
        $etablissements3->setAdresses($this->getReference('addresses3'));
        $etablissements3->setCity($this->getReference('city5'));
        $etablissements3->setSectioneduc(array($this->getReference('sectionEduc4')));
        $etablissements3->setSigle("EMDY");
        $etablissements3->setFilename('download (10).jpg');
        $etablissements3->setType_Etablissements($this->getReference('type_etablissements'));
        $etablissements3->setDateCreation(new \DateTime());
        $manager->persist($etablissements3);


        $etablissements4 = new Etablissements();
        $etablissements4->setName('Lycée Bilingue de Baham');
        $etablissements4->setDescription("enseignement général");
        $etablissements4->setAdresses($this->getReference('addresses4'));
        $etablissements4->setCity($this->getReference('city3'));
        $etablissements4->setSectioneduc(array($this->getReference('sectionEduc3'),
            $this->getReference('sectionEduc2')));
        $etablissements4->setSigle("LYBANG");
        $etablissements4->setFilename('download (13).jpg');
        $etablissements4->setType_Etablissements($this->getReference('type_etablissements3'));
        $etablissements4->setDateCreation(new \DateTime());
        $manager->persist($etablissements4);

        $manager->flush();

        $this->addReference('etablissements1', $etablissements1);
        $this->addReference('etablissements2', $etablissements2);
        $this->addReference('etablissements3', $etablissements3);
        $this->addReference('etablissements4', $etablissements4);
    }

}