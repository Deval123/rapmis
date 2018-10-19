<?php
// src/AppBundle/DataFixtures/ORM/Facteurs_disciplinairesData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Facteurs_disciplinaires;

class Facteurs_disciplinairesData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $disc1 = new Facteurs_disciplinaires();
        $disc1->setStudents($this->getReference('students1'));
        $disc1->setMotif('Bavardage');
        $disc1->setDescription('se comporte toujours comme un perroquet en salle de classe');
        $disc1->setDateMotif(new \DateTime('now'));
        $disc1->setCompteur(1);
        $manager->persist($disc1);

        $disc2 = new Facteurs_disciplinaires();
        $disc2->setStudents($this->getReference('students1'));
        $disc2->setMotif('Bavardage');
        $disc2->setDescription('se comporte toujours comme un perroquet en salle de classe');
        $disc2->setDateMotif(new \DateTime('now'));
        $disc2->setCompteur(1);
        $manager->persist($disc2);

        $disc3 = new Facteurs_disciplinaires();
        $disc3->setStudents($this->getReference('students1'));
        $disc3->setMotif('Bavardage');
        $disc3->setDescription('se comporte toujours comme un perroquet en salle de classe');
        $disc3->setDateMotif(new \DateTime('now'));
        $disc3->setCompteur(2);
        $manager->persist($disc3);

        $disc4 = new Facteurs_disciplinaires();
        $disc4->setStudents($this->getReference('students2'));
        $disc4->setMotif('Bavardage');
        $disc4->setDescription('ne se calme jamais au heures de cours');
        $disc4->setDateMotif(new \DateTime('now'));
        $disc4->setCompteur(1);
        $manager->persist($disc4);

        $disc5 = new Facteurs_disciplinaires();
        $disc5->setStudents($this->getReference('students3'));
        $disc5->setMotif('absent');
        $disc5->setDescription('absence abussive');
        $disc5->setDateMotif(new \DateTime('now'));
        $disc5->setCompteur(1);
        $manager->persist($disc5);

        $disc6 = new Facteurs_disciplinaires();
        $disc6->setStudents($this->getReference('students4'));
        $disc6->setMotif('devoir non fait ');
        $disc6->setDescription('ne participe à aucun devoir a faire à la maison ');
        $disc6->setDateMotif(new \DateTime('now'));
        $disc6->setCompteur(1);
        $manager->persist($disc6);






        $manager->flush();

        $this->addReference('disc1', $disc1);
        $this->addReference('disc2', $disc2);
        $this->addReference('disc3', $disc3);
        $this->addReference('disc4', $disc4);
        $this->addReference('disc5', $disc5);
        $this->addReference('disc6', $disc6);
    }

}