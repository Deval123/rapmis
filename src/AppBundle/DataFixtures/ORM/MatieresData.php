<?php
// src/AppBundle/DataFixtures/ORM/Matieres.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Matieres;

class MatieresData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $matieres1 = new Matieres();
        $matieres1->setName('Fançais');
        $matieres1->setIntitule('FR');
        $manager->persist($matieres1);

        $matieres2 = new Matieres();
        $matieres2->setName('Philosophie');
        $matieres2->setIntitule('PHI');
        $manager->persist($matieres2);

        $matieres3 = new Matieres();
        $matieres3->setName('Histoire');
        $matieres3->setIntitule('Hist');
        $manager->persist($matieres3);

        $matieres4 = new Matieres();
        $matieres4->setName('Géographie');
        $matieres4->setIntitule('Géo');
        $manager->persist($matieres4);

        $matieres5 = new Matieres();
        $matieres5->setName('Langue vivante 1');
        $matieres5->setIntitule('Anglais');
        $manager->persist($matieres5);

        $matieres6 = new Matieres();
        $matieres6->setName('Langue vivante 2');
        $matieres6->setIntitule('Espagnol');
        $manager->persist($matieres6);

        $matieres7 = new Matieres();
        $matieres7->setName('Mathématiques');
        $matieres7->setIntitule('MAT');
        $manager->persist($matieres7);

        $matieres8 = new Matieres();
        $matieres8->setName('Science de la vie et de la terre');
        $matieres8->setIntitule('SVT');
        $manager->persist($matieres8);

        $matieres9 = new Matieres();
        $matieres9->setName('Epréuve physique et sportive');
        $matieres9->setIntitule('EPS');
        $manager->persist($matieres9);

        $matieres10 = new Matieres();
        $matieres10->setName('Sciences Physiques');
        $matieres10->setIntitule('PHY');
        $manager->persist($matieres10);

        $matieres11 = new Matieres();
        $matieres11->setName('Construction Mécanique');
        $matieres11->setIntitule('CM');
        $manager->persist($matieres11);

        $manager->flush();


        $this->addReference('matieres1', $matieres1);
        $this->addReference('matieres2', $matieres2);
        $this->addReference('matieres3', $matieres3);
        $this->addReference('matieres4', $matieres4);
        $this->addReference('matieres5', $matieres5);
        $this->addReference('matieres6', $matieres6);
        $this->addReference('matieres7', $matieres7);
        $this->addReference('matieres8', $matieres8);
        $this->addReference('matieres9', $matieres9);
        $this->addReference('matieres10', $matieres10);
        $this->addReference('matieres11', $matieres11);
    }

}