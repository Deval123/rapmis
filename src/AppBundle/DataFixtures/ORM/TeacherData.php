<?php
// src/AppBundle/DataFixtures/ORM/TeacherData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Teacher;

class TeacherData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $teacher1 = new Teacher();
        $teacher1->setName('Fosting');
        $teacher1->setPrenom('Damien');
        $teacher1->setTel('653552689');
        $teacher1->setFilename("prof1.jpg");
        $teacher1->setEtablissements($this->getReference('etablissements2'));
        $teacher1->setEmail('Damien@Damien.fr');
        $teacher1->setAnneeNais(new \DateTime());
        $teacher1->setMatieres(array($this->getReference('matieres4')));
        $teacher1->setDateCreate(new \DateTime());
        $teacher1->setSexe('M');
        $manager->persist($teacher1);

        $teacher2 = new Teacher();
        $teacher2->setName('Pooja ');
        $teacher2->setPrenom('Patel');
        $teacher2->setTel('6784259863');
        $teacher2->setFilename("prof2.jpg");
        $teacher2->setEtablissements($this->getReference('etablissements2'));
        $teacher2->setEmail('Patel@Patel.fr');
        $teacher2->setAnneeNais(new \DateTime());
        $teacher2->setMatieres(array($this->getReference('matieres1')));
        $teacher2->setDateCreate(new \DateTime());
        $teacher2->setSexe('F');
        $manager->persist($teacher2);

        $teacher3 = new Teacher();
        $teacher3->setName('Ngongang');
        $teacher3->setPrenom('Styve');
        $teacher3->setTel('696587428');
        $teacher3->setFilename("prof3.jpg");
        $teacher3->setEtablissements($this->getReference('etablissements2'));
        $teacher3->setEmail('Styve@gmail.com');
        $teacher3->setAnneeNais(new \DateTime());
        $teacher3->setMatieres(array($this->getReference('matieres2')));
        $teacher3->setDateCreate(new \DateTime());
        $teacher3->setSexe('M');
        $manager->persist($teacher3);

        $teacher4 = new Teacher();
        $teacher4->setName('Megha ');
        $teacher4->setPrenom('Trivedi');
        $teacher4->setTel('542478562');
        $teacher4->setFilename("prof4.jpg");
        $teacher4->setEtablissements($this->getReference('etablissements2'));
        $teacher4->setEmail('Trivedi@Damien.fr');
        $teacher4->setAnneeNais(new \DateTime());
        $teacher4->setMatieres(array($this->getReference('matieres3')));
        $teacher4->setDateCreate(new \DateTime());
        $teacher4->setSexe('M');
        $manager->persist($teacher4);

        $teacher5 = new Teacher();
        $teacher5->setName('Fosting');
        $teacher5->setPrenom('Damien');
        $teacher5->setTel('69783689');
        $teacher5->setFilename("prof5.jpg");
        $teacher5->setEtablissements($this->getReference('etablissements2'));
        $teacher5->setEmail('Damien@Damien.fr');
        $teacher5->setAnneeNais(new \DateTime());
        $teacher5->setMatieres(array($this->getReference('matieres4')));
        $teacher5->setDateCreate(new \DateTime());
        $teacher5->setSexe('M');
        $manager->persist($teacher5);

        $teacher6 = new Teacher();
        $teacher6->setName('Jacob');
        $teacher6->setPrenom('Ryan');
        $teacher6->setTel('653552689');
        $teacher6->setFilename("prof6.jpg");
        $teacher6->setEtablissements($this->getReference('etablissements2'));
        $teacher6->setEmail('Ryan@hotmail.com');
        $teacher6->setAnneeNais(new \DateTime());
        $teacher6->setMatieres(array($this->getReference('matieres6')));
        $teacher6->setDateCreate(new \DateTime());
        $teacher6->setSexe('M');
        $manager->persist($teacher6);

        $teacher7 = new Teacher();
        $teacher7->setName('Soni');
        $teacher7->setPrenom('Jay');
        $teacher7->setTel('3254789656');
        $teacher7->setFilename("prof7.jpg");
        $teacher7->setEtablissements($this->getReference('etablissements2'));
        $teacher7->setEmail('Jay@Jahoo.fr');
        $teacher7->setAnneeNais(new \DateTime());
        $teacher7->setMatieres(array($this->getReference('matieres7')));
        $teacher7->setDateCreate(new \DateTime());
        $teacher7->setSexe('F');
        $manager->persist($teacher7);

        $teacher8 = new Teacher();
        $teacher8->setName('Deo');
        $teacher8->setPrenom('John');
        $teacher8->setTel('653552689');
        $teacher8->setFilename("prof8.jpg");
        $teacher8->setEtablissements($this->getReference('etablissements2'));
        $teacher8->setEmail('john@gmail.com');
        $teacher8->setAnneeNais(new \DateTime());
        $teacher8->setMatieres(array($this->getReference('matieres7')));
        $teacher8->setDateCreate(new \DateTime());
        $teacher8->setSexe('M');
        $manager->persist($teacher8);

        $teacher9 = new Teacher();
        $teacher9->setName('Smith');
        $teacher9->setPrenom('sarah');
        $teacher9->setTel('6444543564');
        $teacher9->setFilename("prof9.jpg");
        $teacher9->setEtablissements($this->getReference('etablissements2'));
        $teacher9->setEmail('sarah@gmail.com');
        $teacher9->setAnneeNais(new \DateTime());
        $teacher9->setMatieres(array($this->getReference('matieres8')));
        $teacher9->setDateCreate(new \DateTime());
        $teacher9->setSexe('F');
        $manager->persist($teacher9);

        $teacher10 = new Teacher();
        $teacher10->setName('Pooja ');
        $teacher10->setPrenom('Patel');
        $teacher10->setTel('653552689');
        $teacher10->setFilename("prof10.jpg");
        $teacher10->setEtablissements($this->getReference('etablissements2'));
        $teacher10->setEmail('pooja@gmail.com');
        $teacher10->setAnneeNais(new \DateTime());
        $teacher10->setMatieres(array($this->getReference('matieres9')));
        $teacher10->setDateCreate(new \DateTime());
        $teacher10->setSexe('F');
        $manager->persist($teacher10);

        $teacher11 = new Teacher();
        $teacher11->setName('Rajesh');
        $teacher11->setPrenom('dev');
        $teacher11->setTel('4444565756');
        $teacher11->setFilename("dev.jpg");
        $teacher11->setEtablissements($this->getReference('etablissements2'));
        $teacher11->setEmail('rajesh@gmail.com');
        $teacher11->setAnneeNais(new \DateTime());
        $teacher11->setMatieres(array($this->getReference('matieres10')));
        $teacher11->setDateCreate(new \DateTime());
        $teacher11->setSexe('M');
        $manager->persist($teacher11);

        $manager->flush();

        $this->addReference('teacher1', $teacher1);
        $this->addReference('teacher2', $teacher2);
        $this->addReference('teacher3', $teacher3);
        $this->addReference('teacher4', $teacher4);
        $this->addReference('teacher5', $teacher5);
        $this->addReference('teacher6', $teacher6);
        $this->addReference('teacher7', $teacher7);
        $this->addReference('teacher8', $teacher8);
        $this->addReference('teacher9', $teacher9);
        $this->addReference('teacher10', $teacher10);
        $this->addReference('teacher11', $teacher11);
    }



}