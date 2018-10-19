<?php
// src/AppBundle/DataFixtures/ORM/UserData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Addresses;

class AddressesData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $addresses1 = new Addresses();
        $addresses1->setTel("676467028");
        $addresses1->setBP('33056 Douala');
        $addresses1->setEmail('devalere@dev.com');
        $addresses1->setFax('');
        $addresses1->setLongitude('');
        $addresses1->setLatitude('');
        $manager->persist($addresses1);

        $addresses2 = new Addresses();
        $addresses2->setTel("694967524");
        $addresses2->setBP('87245 baham');
        $addresses2->setEmail('test@test.com');
        $addresses2->setFax('00237686453693');
        $addresses2->setLongitude('');
        $addresses2->setLatitude('');
        $manager->persist($addresses2);

        $addresses3 = new Addresses();
        $addresses3->setTel("685247310");
        $addresses3->setBP('Yaoundé 85001');
        $addresses3->setEmail('jesus@hotmail.fr');
        $addresses3->setFax('+23722482149');
        $addresses3->setLongitude('');
        $addresses3->setLatitude('');
        $manager->persist($addresses3);

        $addresses4 = new Addresses();
        $addresses4->setTel("052781962");
        $addresses4->setBP('limbé 98075');
        $addresses4->setEmail('yimga@gmail.fr');
        $addresses4->setFax('+23767849549');
        $addresses4->setLongitude('');
        $addresses4->setLatitude('');
        $manager->persist($addresses4);


        $manager->flush();

        $this->addReference('addresses1', $addresses1);
        $this->addReference('addresses2', $addresses2);
        $this->addReference('addresses3', $addresses3);
        $this->addReference('addresses4', $addresses4);
    }

}