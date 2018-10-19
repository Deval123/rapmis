<?php
// src/AppBundle/DataFixtures/ORM/SectionEduc.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\SectionEduc;
use AppBundle\DataFixtures\ORM\SysEducData;

class SectionEducData extends Fixture
{

    public function load(ObjectManager $manager)
    {
        $sectionEduc1 = new SectionEduc();
        $sectionEduc1->setName('Section Anglophone');
        $sectionEduc1->setDescription('ici les cours sont dispensés en langue anglaise');
        $sectionEduc1->setSyseduc(array($this->getReference('syseduc1' )) );
        $manager->persist($sectionEduc1);

       $sectionEduc2 = new SectionEduc();
        $sectionEduc2->setName('Section Francophone');
        $sectionEduc2->setDescription('ici les cours sont dispensés en langue française');
        $sectionEduc2->setSyseduc(array($this->getReference('syseduc2' )));
        $manager->persist($sectionEduc2);

        $sectionEduc3 = new SectionEduc();
        $sectionEduc3->setName('Section Francophone');
        $sectionEduc3->setDescription('les cours sont dispensés en langue française');
        $sectionEduc3->setSyseduc(array($this->getReference('syseduc3' )));
        $manager->persist($sectionEduc3);

        $sectionEduc4 = new SectionEduc();
        $sectionEduc4->setName('Section Anglophone');
        $sectionEduc4->setDescription('ici les cours sont dispensés en langue anglaise');
        $sectionEduc4->setSyseduc(array($this->getReference('syseduc2' )));
        $manager->persist($sectionEduc4);


        $manager->flush();



        $this->addReference('sectionEduc1', $sectionEduc1);
        $this->addReference('sectionEduc2', $sectionEduc2);
        $this->addReference('sectionEduc3', $sectionEduc3);
        $this->addReference('sectionEduc4', $sectionEduc4);
    }

}