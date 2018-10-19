<?php
// src/AppBundle/DataFixtures/ORM/RegionsData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Regions;

class RegionsData extends Fixture
{
    public function load(ObjectManager $manager)
    {  // extends AbstractFixture implements OrderedFixtureInterface

        $region1 = new Regions();
        $region1->setCountry($this->getReference('country1'));
        $region1->setName('Adamaoua');
        $region1->setChefLieu('Ngaoundéré');
        $manager->persist($region1);

        $region2 = new Regions();
        $region2->setCountry($this->getReference('country1'));
        $region2->setName('Centre');
        $region2->setChefLieu('Yaoundé');
        $manager->persist($region2);

        $region3 = new Regions();
        $region3->setCountry($this->getReference('country1'));
        $region3->setName('Est');
        $region3->setChefLieu('Bertoua');
        $manager->persist($region3);

        $region4 = new Regions();
        $region4->setCountry($this->getReference('country1'));
        $region4->setName('Extrême-Nord');
        $region4->setChefLieu('Maroua');
        $manager->persist($region4);

        $region5 = new Regions();
        $region5->setCountry($this->getReference('country1'));
        $region5->setName('Littoral');
        $region5->setChefLieu('Douala');
        $manager->persist($region5);

        $region6 = new Regions();
        $region6->setCountry($this->getReference('country1'));
        $region6->setName('Nord	');
        $region6->setChefLieu('Garoua');
        $manager->persist($region6);

        $region7 = new Regions();
        $region7->setCountry($this->getReference('country1'));
        $region7->setName('Nord-Ouest');
        $region7->setChefLieu('Bamenda');
        $manager->persist($region7);

        $region8 = new Regions();
        $region8->setCountry($this->getReference('country1'));
        $region8->setName('Ouest');
        $region8->setChefLieu('Bafoussam');
        $manager->persist($region8);

        $region9 = new Regions();
        $region9->setCountry($this->getReference('country1'));
        $region9->setName('Sud');
        $region9->setChefLieu('Ebolowa');
        $manager->persist($region9);

        $region10 = new Regions();
        $region10->setCountry($this->getReference('country1'));
        $region10->setName('Sud-Ouest');
        $region10->setChefLieu('Buéa');
        $manager->persist($region10);


        $manager->flush();



        $this->addReference('region1', $region1);
        $this->addReference('region2', $region2);
        $this->addReference('region3', $region3);
        $this->addReference('region4', $region4);
        $this->addReference('region5', $region5);
        $this->addReference('region6', $region6);
        $this->addReference('region7', $region7);
        $this->addReference('region8', $region8);
        $this->addReference('region9', $region9);
        $this->addReference('region10', $region10);


    }

}