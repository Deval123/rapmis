<?php
// src/AppBundle/DataFixtures/ORM/SysEducData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\SysEduc;

class SysEducData extends Fixture
{
   // public const SysEduc_USER_REFERENCE1 = 'syseduc1';
   // public const SysEduc_USER_REFERENCE2 = 'syseduc2';
    //public const SysEduc_USER_REFERENCE3 = 'syseduc3';

    public function load(ObjectManager $manager)
    {
        $syseduc1 = new SysEduc();
        $syseduc1->setName('Enseignement technique industriel');
        $syseduc1->setDescription('l\'enseignement est professionel orienté');
        $manager->persist($syseduc1);

        $syseduc2 = new SysEduc();
        $syseduc2->setName('Enseignement tchenique commerciale');
        $syseduc2->setDescription('l\'enseignement est professionel orienté commerce');
        $manager->persist($syseduc2);

        $syseduc3 = new SysEduc();
        $syseduc3->setName('Enseignement général');
        $syseduc3->setDescription('l\'enseignement n\'est pas professionel juste thérique');
        $manager->persist($syseduc3);

        $manager->flush();

        /* $this->addReference(self::SysEduc_USER_REFERENCE1, $syseduc1);
         $this->addReference(self::SysEduc_USER_REFERENCE2, $syseduc2);
         $this->addReference(self::SysEduc_USER_REFERENCE3, $syseduc3);*/

        $this->addReference('syseduc1', $syseduc1);
        $this->addReference('syseduc2', $syseduc2);
        $this->addReference('syseduc3', $syseduc3);
    }

}