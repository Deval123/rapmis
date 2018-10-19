<?php
// src/AppBundle/DataFixtures/ORM/UserData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Type_etablissements;

class Type_etablissementsData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $type_etablissements = new Type_etablissements();
        $type_etablissements->setName('Université');
        $type_etablissements->setDescription("établissement d'enseignement superieur");
        $manager->persist($type_etablissements);

        $type_etablissements1 = new Type_etablissements();
        $type_etablissements1->setName('Secondaire');
        $type_etablissements1->setDescription("établissement d'enseignement Secondaire");
        $manager->persist($type_etablissements1);

        $type_etablissements2 = new Type_etablissements();
        $type_etablissements2->setName('Primaire');
        $type_etablissements2->setDescription("établissement d'enseignement de base");
        $manager->persist($type_etablissements2);

        $type_etablissements3 = new Type_etablissements();
        $type_etablissements3->setName('Maternelle');
        $type_etablissements3->setDescription("établissement d'enseignement Maternelle pour les tous petits");
        $manager->persist($type_etablissements3);

        $manager->flush();


        $this->addReference('type_etablissements', $type_etablissements);
        $this->addReference('type_etablissements1', $type_etablissements1);
        $this->addReference('type_etablissements2', $type_etablissements2);
        $this->addReference('type_etablissements3', $type_etablissements3);

    }
}