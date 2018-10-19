<?php
// src/AppBundle/DataFixtures/ORM/Chef_departmentData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Chef_department;

class Chef_departmentData extends AbstractFixture
{
    public function load(ObjectManager $manager)
    {
        $chef_department1 = new Chef_department();
        $chef_department1->setTeacher($this->getReference('teacher1'));
        $chef_department1->setMatiere($this->getReference('matieres1'));
        $chef_department1->setDescription('chef de departement Français');
        $manager->persist($chef_department1);

        $chef_department2 = new Chef_department();
        $chef_department2->setTeacher($this->getReference('teacher2'));
        $chef_department2->setMatiere($this->getReference('matieres2'));
        $chef_department2->setDescription('chef de departement Philosophie');
        $manager->persist($chef_department2);

        $chef_department3 = new Chef_department();
        $chef_department3->setTeacher($this->getReference('teacher3'));
        $chef_department3->setMatiere($this->getReference('matieres3'));
        $chef_department3->setDescription('chef de departement histoire');
        $manager->persist($chef_department3);

        $chef_department4 = new Chef_department();
        $chef_department4->setTeacher($this->getReference('teacher4'));
        $chef_department4->setMatiere($this->getReference('matieres4'));
        $chef_department4->setDescription('chef de departement Géographie');
        $manager->persist($chef_department4);

        $chef_department5 = new Chef_department();
        $chef_department5->setTeacher($this->getReference('teacher5'));
        $chef_department5->setMatiere($this->getReference('matieres5'));
        $chef_department5->setDescription('chef de departement Anglais');
        $manager->persist($chef_department5);

        $chef_department6 = new Chef_department();
        $chef_department6->setTeacher($this->getReference('teacher6'));
        $chef_department6->setMatiere($this->getReference('matieres6'));
        $chef_department6->setDescription('chef de departement chinois');
        $manager->persist($chef_department6);

        $chef_department7 = new Chef_department();
        $chef_department7->setTeacher($this->getReference('teacher7'));
        $chef_department7->setMatiere($this->getReference('matieres7'));
        $chef_department7->setDescription('chef de departement SVT');
        $manager->persist($chef_department7);

        $manager->flush();


    }


}