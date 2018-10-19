<?php
// src/AppBundle/DataFixtures/ORM/DepartmentData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Department;

class DepartmentData extends Fixture
{
    public function load(ObjectManager $manager)
    {  // extends AbstractFixture implements OrderedFixtureInterface

        $department1 = new Department();
        $department1->setName('Djérem');
        $department1->setChefLieu('Tibati');
        $department1->setRegions($this->getReference('region1'));
        $manager->persist($department1);

        $department2 = new Department();
        $department2->setName('Faro-et-Déo');
        $department2->setChefLieu('Tignère');
        $department2->setRegions($this->getReference('region1'));
        $manager->persist($department2);

        $department3 = new Department();
        $department3->setName('Mayo-Banyo');
        $department3->setChefLieu('Banyo');
        $department3->setRegions($this->getReference('region1'));
        $manager->persist($department3);

        $department4 = new Department();
        $department4->setName('Mbéré');
        $department4->setChefLieu('Meiganga');
        $department4->setRegions($this->getReference('region1'));
        $manager->persist($department4);

        $department5 = new Department();
        $department5->setName('Vina');
        $department5->setChefLieu('Ngaoundéré');
        $department5->setRegions($this->getReference('region1'));
        $manager->persist($department5);

        $department6 = new Department();
        $department6->setName('Haute-Sanaga	');
        $department6->setChefLieu('	Nanga-Eboko');
        $department6->setRegions($this->getReference('region2'));
        $manager->persist($department6);

        $department7 = new Department();
        $department7->setName('Lekié');
        $department7->setChefLieu('Monatele');
        $department7->setRegions($this->getReference('region2'));
        $manager->persist($department7);

        $department8 = new Department();
        $department8->setName('Mbam-et-Inoubou');
        $department8->setChefLieu('Bafia');
        $department8->setRegions($this->getReference('region2'));
        $manager->persist($department8);

        $department9 = new Department();
        $department9->setName('Mbam-et-Kim');
        $department9->setChefLieu('Ntui');
        $department9->setRegions($this->getReference('region2'));
        $manager->persist($department9);

        $department10 = new Department();
        $department10->setName('Méfou-et-Afamba');
        $department10->setChefLieu('Mfou');
        $department10->setRegions($this->getReference('region2'));
        $manager->persist($department10);

        $department11 = new Department();
        $department11->setName('Méfou-et-Akono');
        $department11->setChefLieu('Ngoumou');
        $department11->setRegions($this->getReference('region2'));
        $manager->persist($department11);

        $department12 = new Department();
        $department12->setName('Mfoundi');
        $department12->setChefLieu('Yaoundé');
        $department12->setRegions($this->getReference('region2'));
        $manager->persist($department12);

        $department13 = new Department();
        $department13->setName('Nyong-et-Kellé');
        $department13->setChefLieu('Éséka');
        $department13->setRegions($this->getReference('region2'));
        $manager->persist($department13);

        $department14 = new Department();
        $department14->setName('Nyong-et-Mfoumou');
        $department14->setChefLieu('Akonolinga');
        $department14->setRegions($this->getReference('region2'));
        $manager->persist($department14);

        $department15 = new Department();
        $department15->setName('Nyong-et-So’o');
        $department15->setChefLieu('Mbalmayo');
        $department15->setRegions($this->getReference('region2'));
        $manager->persist($department15);


        $department16 = new Department();
        $department16->setName('Boumba-et-Ngoko');
        $department16->setChefLieu('Yokadouma');
        $department16->setRegions($this->getReference('region3'));
        $manager->persist($department16);

        $department17 = new Department();
        $department17->setName('Haut-Nyong');
        $department17->setChefLieu('Abong-Mbang');
        $department17->setRegions($this->getReference('region3'));
        $manager->persist($department17);

        $department18 = new Department();
        $department18->setName('Kadey');
        $department18->setChefLieu('Batouri');
        $department18->setRegions($this->getReference('region3'));
        $manager->persist($department18);

        $department19 = new Department();
        $department19->setName('Lom-et-Djérem');
        $department19->setChefLieu('Bertoua');
        $department19->setRegions($this->getReference('region3'));
        $manager->persist($department19);


        $department20 = new Department();
        $department20->setName('Diamaré');
        $department20->setChefLieu('Maroua');
        $department20->setRegions($this->getReference('region4'));
        $manager->persist($department20);

        $department21 = new Department();
        $department21->setName('Logone-et-Chari');
        $department21->setChefLieu('Kousséri');
        $department21->setRegions($this->getReference('region4'));
        $manager->persist($department21);

        $department22 = new Department();
        $department22->setName('Mayo-Danay');
        $department22->setChefLieu('Yagoua');
        $department22->setRegions($this->getReference('region4'));
        $manager->persist($department22);

        $department23 = new Department();
        $department23->setName('Mayo-Kani');
        $department23->setChefLieu('Kaélé');
        $department23->setRegions($this->getReference('region4'));
        $manager->persist($department23);

        $department24 = new Department();
        $department24->setName('Mayo-Sava');
        $department24->setChefLieu('Mora');
        $department24->setRegions($this->getReference('region4'));
        $manager->persist($department24);

        $department25 = new Department();
        $department25->setName('Mayo-Tsanaga');
        $department25->setChefLieu('Mokolo');
        $department25->setRegions($this->getReference('region4'));
        $manager->persist($department25);



        $department26 = new Department();
        $department26->setName('Moungo');
        $department26->setChefLieu('Nkongsamba');
        $department26->setRegions($this->getReference('region5'));
        $manager->persist($department26);

        $department27 = new Department();
        $department27->setName('Nkam');
        $department27->setChefLieu('Yabassi');
        $department27->setRegions($this->getReference('region5'));
        $manager->persist($department27);

        $department28 = new Department();
        $department28->setName('Sanaga-Maritime');
        $department28->setChefLieu('Édéa');
        $department28->setRegions($this->getReference('region5'));
        $manager->persist($department28);

        $department29 = new Department();
        $department29->setName('Wouri');
        $department29->setChefLieu('Douala');
        $department29->setRegions($this->getReference('region5'));
        $manager->persist($department29);


        $department30 = new Department();
        $department30->setName('Bénoué');
        $department30->setChefLieu('Garoua');
        $department30->setRegions($this->getReference('region6'));
        $manager->persist($department30);

        $department31 = new Department();
        $department31->setName('Faro');
        $department31->setChefLieu('Poli');
        $department31->setRegions($this->getReference('region6'));
        $manager->persist($department31);

        $department32 = new Department();
        $department32->setName('Mayo-Louti');
        $department32->setChefLieu('Guider');
        $department32->setRegions($this->getReference('region6'));
        $manager->persist($department32);

        $department33 = new Department();
        $department33->setName('Mayo-Rey');
        $department33->setChefLieu('Tcholliré');
        $department33->setRegions($this->getReference('region6'));
        $manager->persist($department33);


        $department34 = new Department();
        $department34->setName('Boyo');
        $department34->setChefLieu('Fundong');
        $department34->setRegions($this->getReference('region7'));
        $manager->persist($department34);

        $department35 = new Department();
        $department35->setName('Bui');
        $department35->setChefLieu('Kumbo');
        $department35->setRegions($this->getReference('region7'));
        $manager->persist($department35);

        $department36 = new Department();
        $department36->setName('Donga-Mantung');
        $department36->setChefLieu('Nkambé');
        $department36->setRegions($this->getReference('region7'));
        $manager->persist($department36);


        $department37 = new Department();
        $department37->setName('Menchum');
        $department37->setChefLieu('Wum');
        $department37->setRegions($this->getReference('region7'));
        $manager->persist($department37);

        $department38 = new Department();
        $department38->setName('Mezam');
        $department38->setChefLieu('Bamenda');
        $department38->setRegions($this->getReference('region7'));
        $manager->persist($department38);

        $department39 = new Department();
        $department39->setName('Momo');
        $department39->setChefLieu('Mbengwi');
        $department39->setRegions($this->getReference('region7'));
        $manager->persist($department39);

        $department40 = new Department();
        $department40->setName('Ngo-Ketunjia');
        $department40->setChefLieu('Ndop');
        $department40->setRegions($this->getReference('region7'));
        $manager->persist($department40);



        $department41 = new Department();
        $department41->setName('Hauts-Plateaux');
        $department41->setChefLieu('Baham');
        $department41->setRegions($this->getReference('region8'));
        $manager->persist($department41);

        $department42 = new Department();
        $department42->setName('Koung-Khi');
        $department42->setChefLieu('Bandjoun');
        $department42->setRegions($this->getReference('region8'));
        $manager->persist($department42);

        $department43 = new Department();
        $department43->setName('Menoua');
        $department43->setChefLieu('Dschang');
        $department43->setRegions($this->getReference('region8'));
        $manager->persist($department43);

        $department44 = new Department();
        $department44->setName('Mifi');
        $department44->setChefLieu('Bafoussam');
        $department44->setRegions($this->getReference('region8'));
        $manager->persist($department44);


        $department45 = new Department();
        $department45->setName('Ndé');
        $department45->setChefLieu('Bangangté');
        $department45->setRegions($this->getReference('region8'));
        $manager->persist($department45);

        $department46 = new Department();
        $department46->setName('Noun');
        $department46->setChefLieu('Foumban');
        $department46->setRegions($this->getReference('region8'));
        $manager->persist($department46);

        $department47 = new Department();
        $department47->setName('Bamboutos');
        $department47->setChefLieu('Mbouda');
        $department47->setRegions($this->getReference('region8'));
        $manager->persist($department47);

        $department48 = new Department();
        $department48->setName('Haut-Nkam');
        $department48->setChefLieu('Bafang');
        $department48->setRegions($this->getReference('region8'));
        $manager->persist($department48);



        $department49 = new Department();
        $department49->setName('Dja-et-Lobo');
        $department49->setChefLieu('Sangmélima');
        $department49->setRegions($this->getReference('region9'));
        $manager->persist($department49);

        $department50 = new Department();
        $department50->setName('Mvila');
        $department50->setChefLieu('Ebolowa');
        $department50->setRegions($this->getReference('region9'));
        $manager->persist($department50);


        $department51 = new Department();
        $department51->setName('Océan');
        $department51->setChefLieu('Kribi');
        $department51->setRegions($this->getReference('region9'));
        $manager->persist($department51);

        $department52 = new Department();
        $department52->setName('Vallée-du-Ntem');
        $department52->setChefLieu('Ambam');
        $department52->setRegions($this->getReference('region9'));
        $manager->persist($department52);

        $department53 = new Department();
        $department53->setName('Limbé');
        $department53->setChefLieu('Limbé');
        $department53->setRegions($this->getReference('region10'));
        $manager->persist($department53);

        $department54 = new Department();
        $department54->setName('Koupé-Manengouba');
        $department54->setChefLieu('Bangem');
        $department54->setRegions($this->getReference('region10'));
        $manager->persist($department54);


        $department55 = new Department();
        $department55->setName('Lebialem');
        $department55->setChefLieu('Menji');
        $department55->setRegions($this->getReference('region10'));
        $manager->persist($department55);

        $department56 = new Department();
        $department56->setName('Manyu');
        $department56->setChefLieu('Mamfé');
        $department56->setRegions($this->getReference('region10'));
        $manager->persist($department56);

        $department57 = new Department();
        $department57->setName('Meme');
        $department57->setChefLieu('Kumba');
        $department57->setRegions($this->getReference('region10'));
        $manager->persist($department57);

        $department58 = new Department();
        $department58->setName('Ndian');
        $department58->setChefLieu('Mundemba');
        $department58->setRegions($this->getReference('region10'));
        $manager->persist($department58);


        $manager->flush();



        $this->addReference('department1', $department1);
        $this->addReference('department2', $department2);
        $this->addReference('department3', $department3);
        $this->addReference('department4', $department4);
        $this->addReference('department5', $department5);
        $this->addReference('department6', $department6);
        $this->addReference('department7', $department7);
        $this->addReference('department8', $department8);
        $this->addReference('department9', $department9);
        $this->addReference('department10', $department10);
        $this->addReference('department11', $department11);
        $this->addReference('department12', $department12);
        $this->addReference('department13', $department13);
        $this->addReference('department14', $department14);
        $this->addReference('department15', $department15);
        $this->addReference('department16', $department16);
        $this->addReference('department17', $department17);
        $this->addReference('department18', $department18);
        $this->addReference('department19', $department19);
        $this->addReference('department20', $department20);
        $this->addReference('department21', $department21);
        $this->addReference('department22', $department22);
        $this->addReference('department23', $department23);
        $this->addReference('department24', $department24);
        $this->addReference('department25', $department25);
        $this->addReference('department26', $department26);
        $this->addReference('department27', $department27);
        $this->addReference('department28', $department28);
        $this->addReference('department29', $department29);
        $this->addReference('department30', $department30);
        $this->addReference('department31', $department31);
        $this->addReference('department32', $department32);
        $this->addReference('department33', $department33);
        $this->addReference('department34', $department34);
        $this->addReference('department35', $department35);
        $this->addReference('department36', $department36);
        $this->addReference('department37', $department37);
        $this->addReference('department38', $department38);
        $this->addReference('department39', $department39);
        $this->addReference('department40', $department40);
        $this->addReference('department41', $department41);
        $this->addReference('department42', $department42);
        $this->addReference('department43', $department43);
        $this->addReference('department44', $department44);
        $this->addReference('department45', $department45);
        $this->addReference('department46', $department46);
        $this->addReference('department47', $department47);
        $this->addReference('department48', $department48);
        $this->addReference('department49', $department49);
        $this->addReference('department50', $department50);
        $this->addReference('department51', $department51);
        $this->addReference('department52', $department52);
        $this->addReference('department53', $department53);
        $this->addReference('department54', $department54);
        $this->addReference('department55', $department55);
        $this->addReference('department56', $department56);
        $this->addReference('department57', $department57);
        $this->addReference('department58', $department58);

    }


}