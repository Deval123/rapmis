<?php
// src/AppBundle/DataFixtures/ORM/ClassesData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Classes;

class ClassesData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $classes1 = new Classes();
        $classes1->setNiveau($this->getReference('niveau1'));
        $classes1->setName('M1');
        $classes1->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes1);

        $classes2 = new Classes();
        $classes2->setNiveau($this->getReference('niveau1'));
        $classes2->setName('M2');
        $classes2->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes2);

        $classes3 = new Classes();
        $classes3->setNiveau($this->getReference('niveau2'));
        $classes3->setName('1');
        $classes3->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes3);

        $classes4 = new Classes();
        $classes4->setNiveau($this->getReference('niveau1'));
        $classes4->setName('M3');
        $classes4->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes4);

        $classes5 = new Classes();
        $classes5->setNiveau($this->getReference('niveau3'));
        $classes5->setName('M1');
        $classes5->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes5);

        $classes6 = new Classes();
        $classes6->setNiveau($this->getReference('niveau16'));
        $classes6->setName('2');
        $classes6->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes6);

        $classes7 = new Classes();
        $classes7->setNiveau($this->getReference('niveau4'));
        $classes7->setName('M1');
        $classes7->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes7);

        $classes8 = new Classes();
        $classes8->setNiveau($this->getReference('niveau4'));
        $classes8->setName('M2');
        $classes8->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes8);

        $classes9 = new Classes();
        $classes9->setNiveau($this->getReference('niveau5'));
        $classes9->setName('1');
        $classes9->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes9);

        $classes10 = new Classes();
        $classes10->setNiveau($this->getReference('niveau6'));
        $classes10->setName('1');
        $classes10->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes10);

        $classes11 = new Classes();
        $classes11->setNiveau($this->getReference('niveau7'));
        $classes11->setName('1');
        $classes11->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes11);

        $classes12 = new Classes();
        $classes12->setNiveau($this->getReference('niveau8'));
        $classes12->setName('1');
        $classes12->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes12);

        $classes13 = new Classes();
        $classes13->setNiveau($this->getReference('niveau9'));
        $classes13->setName('1');
        $classes13->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes13);

        $classes14 = new Classes();
        $classes14->setNiveau($this->getReference('niveau9'));
        $classes14->setName('2');
        $classes14->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes14);

        $classes15 = new Classes();
        $classes15->setNiveau($this->getReference('niveau9'));
        $classes15->setName('3');
        $classes15->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes15);

        $classes16 = new Classes();
        $classes16->setNiveau($this->getReference('niveau10'));
        $classes16->setName('1');
        $classes16->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes16);

        $classes17 = new Classes();
        $classes17->setNiveau($this->getReference('niveau11'));
        $classes17->setName('1');
        $classes17->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes17);

        $classes18 = new Classes();
        $classes18->setNiveau($this->getReference('niveau12'));
        $classes18->setName('1');
        $classes18->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes18);

        $classes19 = new Classes();
        $classes19->setNiveau($this->getReference('niveau13'));
        $classes19->setName('1');
        $classes19->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes19);

        $classes20 = new Classes();
        $classes20->setNiveau($this->getReference('niveau14'));
        $classes20->setName('1');
        $classes20->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes20);

        $classes21 = new Classes();
        $classes21->setNiveau($this->getReference('niveau15'));
        $classes21->setName('1');
        $classes21->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes21);

        $classes22 = new Classes();
        $classes22->setNiveau($this->getReference('niveau16'));
        $classes22->setName('1');
        $classes22->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes22);

        $classes23 = new Classes();
        $classes23->setNiveau($this->getReference('niveau17'));
        $classes23->setName('1');
        $classes23->setEtablissements($this->getReference('etablissements2'));
        $manager->persist($classes23);




        $manager->flush();

        $this->addReference('classes1', $classes1);
        $this->addReference('classes2', $classes2);
        $this->addReference('classes3', $classes3);
        $this->addReference('classes4', $classes4);
        $this->addReference('classes5', $classes5);
        $this->addReference('classes6', $classes6);
        $this->addReference('classes7', $classes7);
        $this->addReference('classes8', $classes8);
        $this->addReference('classes9', $classes9);
        $this->addReference('classes10', $classes10);
        $this->addReference('classes11', $classes11);
        $this->addReference('classes12', $classes12);
        $this->addReference('classes13', $classes13);
        $this->addReference('classes14', $classes14);
        $this->addReference('classes15', $classes15);
        $this->addReference('classes16', $classes16);
        $this->addReference('classes17', $classes17);
        $this->addReference('classes18', $classes18);
        $this->addReference('classes19', $classes19);
        $this->addReference('classes20', $classes20);
        $this->addReference('classes21', $classes21);
        $this->addReference('classes22', $classes22);
        $this->addReference('classes23', $classes23);
    }

}