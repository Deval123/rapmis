<?php
// src/AppBundle/DataFixtures/ORM/NiveauData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Niveau;

class NiveauData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $niveau1 = new Niveau();
        $niveau1->setName('6eme');
        $niveau1->setDescription('');
        $niveau1->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau1);

        $niveau2 = new Niveau();
        $niveau2->setName('2ndTIC');
        $niveau2->setDescription('');
        $niveau2->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau2);

        $niveau3 = new Niveau();
        $niveau3->setName('5eme');
        $niveau3->setDescription('');
        $niveau3->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau3);

        $niveau4 = new Niveau();
        $niveau4->setName('4emeExp');
        $niveau4->setDescription('');
        $niveau4->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau4);

        $niveau5 = new Niveau();
        $niveau5->setName('4emeAll');
        $niveau5->setDescription('');
        $niveau5->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres11')));
        $manager->persist($niveau5);

        $niveau6 = new Niveau();
        $niveau6->setName('3emeAll');
        $niveau6->setDescription('');
        $niveau6->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau6);

        $niveau7 = new Niveau();
        $niveau7->setName('3emeExp');
        $niveau7->setDescription('');
        $niveau7->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres11')));
        $manager->persist($niveau7);

        $niveau8 = new Niveau();
        $niveau8->setName('2ndC');
        $niveau8->setDescription('');
        $niveau8->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10'),
            $this->getReference('matieres11')));
        $manager->persist($niveau8);

        $niveau9 = new Niveau();
        $niveau9->setName('2ndA4_All');
        $niveau9->setDescription('');
        $niveau9->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau9);

        $niveau10 = new Niveau();
        $niveau10->setName('2ndA4_Exp');
        $niveau10->setDescription('');
        $niveau10->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau10);

        $niveau11 = new Niveau();
        $niveau11->setName('1èreA4_Exp');
        $niveau11->setDescription('');
        $niveau11->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau11);

        $niveau12 = new Niveau();
        $niveau12->setName('1èreA4_All');
        $niveau12->setDescription('');
        $niveau12->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10'),
            $this->getReference('matieres11')));
        $manager->persist($niveau12);

        $niveau13 = new Niveau();
        $niveau13->setName('TleC');
        $niveau13->setDescription('');
        $niveau13->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau13);

        $niveau14 = new Niveau();
        $niveau14->setName('Tle_A4_All');
        $niveau14->setDescription('');
        $niveau14->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau14);

        $niveau15 = new Niveau();
        $niveau15->setName('Tle_A4_Exp');
        $niveau15->setDescription('');
        $niveau15->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau15);

        $niveau16 = new Niveau();
        $niveau16->setName('Tle_TIC');
        $niveau16->setDescription('');
        $niveau16->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau16);

        $niveau17 = new Niveau();
        $niveau17->setName('Tle_B');
        $niveau17->setDescription('');
        $niveau17->setMatieres(array(
            $this->getReference('matieres1'),
            $this->getReference('matieres2'),
            $this->getReference('matieres3'),
            $this->getReference('matieres4'),
            $this->getReference('matieres5'),
            $this->getReference('matieres6'),
            $this->getReference('matieres7'),
            $this->getReference('matieres8'),
            $this->getReference('matieres9'),
            $this->getReference('matieres10')));
        $manager->persist($niveau17);


        $manager->flush();


        $this->addReference('niveau1', $niveau1);
        $this->addReference('niveau2', $niveau2);
        $this->addReference('niveau3', $niveau3);
        $this->addReference('niveau4', $niveau4);
        $this->addReference('niveau5', $niveau5);
        $this->addReference('niveau6', $niveau6);
        $this->addReference('niveau7', $niveau7);
        $this->addReference('niveau8', $niveau8);
        $this->addReference('niveau9', $niveau9);
        $this->addReference('niveau10', $niveau10);
        $this->addReference('niveau11', $niveau11);
        $this->addReference('niveau12', $niveau12);
        $this->addReference('niveau13', $niveau13);
        $this->addReference('niveau14', $niveau14);
        $this->addReference('niveau15', $niveau15);
        $this->addReference('niveau16', $niveau16);
        $this->addReference('niveau17', $niveau17);
    }

}