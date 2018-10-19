<?php
// src/AppBundle/DataFixtures/ORM/StudentsData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Students;
use Doctrine\ORM\Query\AST\Functions\CurrentTimestampFunction;

class StudentsData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $students1 = new Students();
        $students1->setName('Eba');
        $students1->setPrenom('Tatiana');
        $students1->setSexe('F');
        $students1->setAnneeNais(new \DateTime('now'));
        $students1->setLieuNais('Ntui');
        $students1->setFilename("stud1.jpg");
        $students1->setDateCreate(new \DateTime());
        $students1->setAllergieAlimentaire('');
        $students1->setClasses($this->getReference('classes1'));
        $students1->setNouveau(true);
        $students1->setRedoublant(false);
        $students1->setEtudeDossier(true);
        $manager->persist($students1);


        $students2 = new Students();
        $students2->setName('Tekom');
        $students2->setPrenom('Gilles');
        $students2->setSexe('M');
        $students2->setAnneeNais(new \DateTime('now'));
        $students2->setLieuNais('Bafoussam');
        $students2->setFilename("stud2.jpg");
        $students2->setDateCreate(new \DateTime( ));
        $students2->setAllergieAlimentaire('');
        $students2->setClasses($this->getReference('classes2'));
        $students2->setNouveau(true);
        $students2->setRedoublant(false);
        $students2->setEtudeDossier(false);
        $manager->persist($students2);


        $students3 = new Students();
        $students3->setName('Magni');
        $students3->setPrenom('Françoise');
        $students3->setSexe('F');
        $students3->setAnneeNais(new \DateTime('now'));
        $students3->setLieuNais('Ebolowa');
        $students3->setFilename("stud3.jpg");
        $students3->setDateCreate(new \DateTime( ));
        $students3->setAllergieAlimentaire('');
        $students3->setClasses($this->getReference('classes2'));
        $students3->setNouveau(false);
        $students3->setRedoublant(true);
        $students3->setEtudeDossier(false);
        $manager->persist($students3);

        $students4 = new Students();
        $students4->setName('Wamba');
        $students4->setPrenom('Leslie');
        $students4->setSexe('F');
        $students4->setAnneeNais(new \DateTime('now'));
        $students4->setLieuNais('Douala');
        $students4->setFilename("stud4.jpg");
        $students4->setDateCreate(new \DateTime());
        $students4->setAllergieAlimentaire('');
        $students4->setClasses($this->getReference('classes3'));
        $students4->setNouveau(true);
        $students4->setRedoublant(false);
        $students4->setEtudeDossier(false);
        $manager->persist($students4);

        $students5 = new Students();
        $students5->setName('Teguekeng');
        $students5->setPrenom('Platini');
        $students5->setSexe('M');
        $students5->setAnneeNais(new \DateTime('now'));
        $students5->setLieuNais('Mbouda');
        $students5->setFilename("stud5.jpg");
        $students5->setDateCreate(new \DateTime( ));
        $students5->setAllergieAlimentaire('');
        $students5->setClasses($this->getReference('classes4'));
        $students5->setNouveau(false);
        $students5->setRedoublant(true);
        $students5->setEtudeDossier(false);
        $manager->persist($students5);

        $students6 = new Students();
        $students6->setName('Bepe');
        $students6->setPrenom('Paul');
        $students6->setSexe('M');
        $students6->setAnneeNais(new \DateTime('now'));
        $students6->setLieuNais('Dschang');
        $students6->setFilename("stud6.jpg");
        $students6->setDateCreate(new \DateTime());
        $students6->setAllergieAlimentaire('');
        $students6->setClasses($this->getReference('classes3'));
        $students6->setNouveau(true);
        $students6->setRedoublant(false);
        $students6->setEtudeDossier(true);
        $manager->persist($students6);

        $students7 = new Students();
        $students7->setName('Kouam');
        $students7->setPrenom('Calvin');
        $students7->setSexe('M');
        $students7->setAnneeNais(new \DateTime('now'));
        $students7->setLieuNais('Bafang');
        $students7->setFilename("stud7.jpg");
        $students7->setDateCreate(new \DateTime( ));
        $students7->setAllergieAlimentaire('au sucre');
        $students7->setClasses($this->getReference('classes4'));
        $students7->setNouveau(true);
        $students7->setRedoublant(false);
        $students7->setEtudeDossier(true);
        $manager->persist($students7);

        $students8 = new Students();
        $students8->setName('Kuatse');
        $students8->setPrenom('Dieudoné');
        $students8->setSexe('M');
        $students8->setAnneeNais(new \DateTime('now'));
        $students8->setLieuNais('Baham');
        $students8->setFilename("stud8.jpg");
        $students8->setDateCreate(new \DateTime());
        $students8->setAllergieAlimentaire('lait');
        $students8->setClasses($this->getReference('classes5'));
        $students8->setNouveau(false);
        $students8->setRedoublant(true);
        $students8->setEtudeDossier(true);
        $manager->persist($students8);

        $students9 = new Students();
        $students9->setName('Simo');
        $students9->setPrenom('Marc Aurel');
        $students9->setSexe('M');
        $students9->setAnneeNais(new \DateTime('now'));
        $students9->setLieuNais('Bafang');
        $students9->setFilename("stud9.jpg");
        $students9->setDateCreate(new \DateTime());
        $students9->setAllergieAlimentaire('amidon');
        $students9->setClasses($this->getReference('classes6'));
        $students9->setNouveau(false);
        $students9->setRedoublant(true);
        $students9->setEtudeDossier(false);
        $manager->persist($students9);

        $students10 = new Students();
        $students10->setName('Wakam');
        $students10->setPrenom('Gabel');
        $students10->setSexe('F');
        $students10->setAnneeNais(new \DateTime('now'));
        $students10->setLieuNais('Bafang');
        $students10->setFilename("stud10.jpg");
        $students10->setDateCreate(new \DateTime( ));
        $students10->setAllergieAlimentaire('huile rouge');
        $students10->setClasses($this->getReference('classes5'));
        $students10->setNouveau(false);
        $students10->setRedoublant(true);
        $students10->setEtudeDossier(true);
        $manager->persist($students10);

        $students11 = new Students();
        $students11->setName('Djackpou');
        $students11->setPrenom('Sandrine');
        $students11->setSexe('F');
        $students11->setAnneeNais(new \DateTime('now'));
        $students11->setLieuNais('Bamenda');
        $students11->setFilename("stud11.jpg");
        $students11->setDateCreate(new \DateTime( ));
        $students11->setAllergieAlimentaire('pâtes');
        $students11->setClasses($this->getReference('classes6'));
        $students11->setNouveau(true);
        $students11->setRedoublant(false);
        $students11->setEtudeDossier(false);
        $manager->persist($students11);

        $students12 = new Students();
        $students12->setName('Ewombé');
        $students12->setPrenom('Sarah');
        $students12->setSexe('F');
        $students12->setAnneeNais(new \DateTime('now'));
        $students12->setLieuNais('Bafia');
        $students12->setFilename("stud12.jpg");
        $students12->setDateCreate(new \DateTime( ));
        $students12->setAllergieAlimentaire('sucrerie');
        $students12->setClasses($this->getReference('classes13'));
        $students12->setNouveau(true);
        $students12->setRedoublant(false);
        $students12->setEtudeDossier(true);
        $manager->persist($students12);

        $students13 = new Students();
        $students13->setName('Eyong');
        $students13->setPrenom('Sarah aniesse');
        $students13->setSexe('F');
        $students13->setAnneeNais(new \DateTime('now'));
        $students13->setLieuNais('Yaoundé');
        $students13->setFilename("stud13.jpg");
        $students13->setDateCreate(new \DateTime( ));
        $students13->setClasses($this->getReference('classes7'));
        $students13->setNouveau(true);
        $students13->setRedoublant(false);
        $students13->setEtudeDossier(true);
        $manager->persist($students13);

        $students14 = new Students();
        $students14->setName('Nlend');
        $students14->setPrenom('Nadine');
        $students14->setSexe('F');
        $students14->setAnneeNais(new \DateTime('now'));
        $students14->setLieuNais('Douala');
        $students14->setFilename("stud14.jpg");
        $students14->setDateCreate(new \DateTime( ));
        $students14->setClasses($this->getReference('classes7'));
        $students14->setNouveau(false);
        $students14->setRedoublant(true);
        $students14->setEtudeDossier(false);
        $manager->persist($students14);

        $students15 = new Students();
        $students15->setName('Makamtche');
        $students15->setPrenom('Françise');
        $students15->setSexe('F');
        $students15->setAnneeNais(new \DateTime('now'));
        $students15->setLieuNais('Bandjoun');
        $students15->setFilename("stud15.jpg");
        $students15->setDateCreate(new \DateTime( ));
        $students15->setClasses($this->getReference('classes8'));
        $students15->setNouveau(true);
        $students15->setRedoublant(false);
        $students15->setEtudeDossier(true);
        $manager->persist($students15);

        $students16 = new Students();
        $students16->setName('Zeko');
        $students16->setPrenom('Gervais');
        $students16->setSexe('M');
        $students16->setAnneeNais(new \DateTime('now'));
        $students16->setLieuNais('Baham');
        $students16->setFilename("stud16.jpg");
        $students16->setDateCreate(new \DateTime( ));
        $students16->setClasses($this->getReference('classes8'));
        $students16->setNouveau(true);
        $students16->setRedoublant(false);
        $students16->setEtudeDossier(true);
        $manager->persist($students16);

        $students17 = new Students();
        $students17->setName('Messina');
        $students17->setPrenom('Bijoux');
        $students17->setSexe('F');
        $students17->setAnneeNais(new \DateTime('now'));
        $students17->setLieuNais('Douala');
        $students17->setFilename("stud17.jpg");
        $students17->setDateCreate(new \DateTime( ));
        $students17->setClasses($this->getReference('classes9'));
        $students17->setNouveau(true);
        $students17->setRedoublant(false);
        $students17->setEtudeDossier(false);
        $manager->persist($students17);

        $students18 = new Students();
        $students18->setName('Talimita');
        $students18->setPrenom('Platini');
        $students18->setSexe('M');
        $students18->setAnneeNais(new \DateTime('now'));
        $students18->setLieuNais('Bafang');
        $students18->setFilename("stud18.jpg");
        $students18->setDateCreate(new \DateTime());
        $students18->setClasses($this->getReference('classes10'));
        $students18->setNouveau(true);
        $students18->setRedoublant(false);
        $students18->setEtudeDossier(true);
        $manager->persist($students18);

        $students19 = new Students();
        $students19->setName('Fapou');
        $students19->setPrenom('Gabet');
        $students19->setSexe('M');
        $students19->setAnneeNais(new \DateTime('now'));
        $students19->setLieuNais('Bangoua');
        $students19->setFilename("stud19.jpg");
        $students19->setDateCreate(new \DateTime( ));
        $students19->setClasses($this->getReference('classes12'));
        $students19->setNouveau(true);
        $students19->setRedoublant(false);
        $students19->setEtudeDossier(true);
        $manager->persist($students19);

        $students20 = new Students();
        $students20->setName('Ebeng Olock');
        $students20->setPrenom('Melissa Gloria');
        $students20->setSexe('F');
        $students20->setAnneeNais(new \DateTime('now'));
        $students20->setLieuNais('Nkongsamba');
        $students20->setFilename("stud20.jpg");
        $students20->setDateCreate(new \DateTime( ));
        $students20->setClasses($this->getReference('classes11'));
        $students20->setNouveau(false);
        $students20->setRedoublant(true);
        $students20->setEtudeDossier(false);
        $manager->persist($students20);


        $manager->flush();

        $this->addReference('students1', $students1);
        $this->addReference('students2', $students2);
        $this->addReference('students3', $students3);
        $this->addReference('students4', $students4);
        $this->addReference('students5', $students5);
        $this->addReference('students6', $students6);
        $this->addReference('students7', $students7);
        $this->addReference('students8', $students8);
        $this->addReference('students9', $students9);
        $this->addReference('students10', $students10);
        $this->addReference('students11', $students11);
        $this->addReference('students12', $students12);
        $this->addReference('students13', $students13);
        $this->addReference('students14', $students14);
        $this->addReference('students15', $students15);
        $this->addReference('students16', $students16);
        $this->addReference('students17', $students17);
        $this->addReference('students18', $students18);
        $this->addReference('students19', $students19);
        $this->addReference('students20', $students20);
    }

}