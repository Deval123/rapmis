<?php
// src/AppBundle/DataFixtures/ORM/Enseignants_titulaireData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Enseignants_titulaire;

class Enseignants_titulaireData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $Enseignants_titulaire1 = new Enseignants_titulaire();
        $Enseignants_titulaire1->setClasses($this->getReference('classes1'));
        $Enseignants_titulaire1->setTeacher($this->getReference('teacher1'));
        $Enseignants_titulaire1->setDescription('titulaire de la terminal');
        $manager->persist($Enseignants_titulaire1);

        $Enseignants_titulaire2 = new Enseignants_titulaire();
        $Enseignants_titulaire2->setClasses($this->getReference('classes2'));
        $Enseignants_titulaire2->setTeacher($this->getReference('teacher2'));
        $Enseignants_titulaire2->setDescription('titulaire de la classe ');
        $manager->persist($Enseignants_titulaire2);

        $Enseignants_titulaire3 = new Enseignants_titulaire();
        $Enseignants_titulaire3->setClasses($this->getReference('classes3'));
        $Enseignants_titulaire3->setTeacher($this->getReference('teacher3'));
        $Enseignants_titulaire3->setDescription('titulaire de la seconde');
        $manager->persist($Enseignants_titulaire3);

        $Enseignants_titulaire4 = new Enseignants_titulaire();
        $Enseignants_titulaire4->setClasses($this->getReference('classes4'));
        $Enseignants_titulaire4->setTeacher($this->getReference('teacher4'));
        $Enseignants_titulaire4->setDescription('titulaire ici');
        $manager->persist($Enseignants_titulaire4);



        $manager->flush();
    }

}