<?php
// src/AppBundle/DataFixtures/ORM/CityData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\City;

class CityData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $city1 = new City();
        $city1->setName('Baham');
        $city1->setDepartment($this->getReference('department41'));
        $manager->persist($city1);

        $city2 = new City();
        $city2->setName('Douala');
        $city2->setDepartment($this->getReference('department29'));
        $manager->persist($city2);

        $city3 = new City();
        $city3->setName('Yaoundé');
        $city3->setDepartment($this->getReference('department12'));
        $manager->persist($city3);

        $city4 = new City();
        $city4->setName('Nkambé');
        $city4->setDepartment($this->getReference('department36'));
        $manager->persist($city4);

        $city5 = new City();
        $city5->setName('Bangangté');
        $city5->setDepartment($this->getReference('department45'));
        $manager->persist($city5);

        $city6 = new City();
        $city6->setName('Limbé');
        $city6->setDepartment($this->getReference('department53'));
        $manager->persist($city6);

        $manager->flush();

        $this->addReference('city1', $city1);
        $this->addReference('city2', $city2);
        $this->addReference('city3', $city3);
        $this->addReference('city4', $city4);
        $this->addReference('city5', $city5);
        $this->addReference('city6', $city6);
    }
}