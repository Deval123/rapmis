<?php
// src/AppBundle/DataFixtures/ORM/UserData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;



    class UserData extends AbstractFixture implements  ContainerAwareInterface {

        /**
         * @var ContainerInterface
         */
        private $container;

        public function setContainer(ContainerInterface $container = null)
        {
            $this->container = $container;
        }



        public function load(ObjectManager $manager)
        {
            $userAdmin = new User();
            $userAdmin->setUsername('user1');
            $userAdmin->setEmail('user1@user1.com');
            $encoder = $this->container->get('security.password_encoder');
            $encodedPass = $encoder->encodePassword($userAdmin, 'user1');
            $userAdmin->setPassword($encodedPass);
            $userAdmin->setPhoneNumber(6565565685);
            $userAdmin->setEnabled(true);
            $manager->persist($userAdmin);


            $userAdmin1 = new User();
            $userAdmin1->setUsername('test');
            $userAdmin1->setEmail('test@test.com');
            $encoder = $this->container->get('security.password_encoder');
            $encodedPass = $encoder->encodePassword($userAdmin1, 'test');
            $userAdmin1->setPassword($encodedPass);
            $userAdmin1->setEnabled(true);
            $userAdmin1->setPhoneNumber(87542862267);
            $userAdmin1->setEtablissements($this->getReference('etablissements1'));
            $manager->persist($userAdmin1);


            $userAdmin2 = new User();
            $userAdmin2->setUsername('rapmis');
            $userAdmin2->setEmail('rapmis@rapmis.com');
            $encoder = $this->container->get('security.password_encoder');
            $encodedPass = $encoder->encodePassword($userAdmin2, 'rapmis');

            //$userAdmin2->setRoles(array());
            $userAdmin2->setPassword($encodedPass);
            $userAdmin2->setEnabled(true);
            $userAdmin2->setPhoneNumber(2678495213);
            $userAdmin2->setEtablissements($this->getReference('etablissements2'));
            $manager->persist($userAdmin2);


            $userAdmin3 = new User();
            $userAdmin3->setUsername('user2');
            $userAdmin3->setEmail('user2@user2.com');
            $encoder = $this->container->get('security.password_encoder');
            $encodedPass = $encoder->encodePassword($userAdmin3, 'user2');
            $userAdmin3->setPassword($encodedPass);
            $userAdmin3->setEnabled(true);
            $userAdmin3->setPhoneNumber(2145796585456);
            $userAdmin3->setEtablissements($this->getReference('etablissements3'));
            $manager->persist($userAdmin3);





            $manager->flush();
        }


    }