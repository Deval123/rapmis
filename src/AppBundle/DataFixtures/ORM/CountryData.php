<?php
// src/AppBundle/DataFixtures/ORM/CountryData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Country;

class CountryData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $country1 = new Country();
        $country1->setName('Cameroun');
        $country1->setCapital('Yaoundé');
        $manager->persist($country1);

        $country2 = new Country();
        $country2->setName('Nigeria');
        $country2->setCapital('Abudja');
        $manager->persist($country2);

        $country3 = new Country();
        $country3->setName('Congo');
        $country3->setCapital('Brazzaville');
        $manager->persist($country3);

        $country4 = new Country();
        $country4->setName('Tchad');
        $country4->setCapital('N\'Djaména');
        $manager->persist($country4);



        $manager->flush();

        $this->addReference('country1', $country1);
        $this->addReference('country2', $country2);
        $this->addReference('country3', $country3);
        $this->addReference('country4', $country4);
    }

}