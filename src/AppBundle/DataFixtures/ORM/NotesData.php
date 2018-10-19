<?php
// src/AppBundle/DataFixtures/ORM/NotesData.php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Notes;

class NotesData extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $notes1 = new Notes();
        $notes1->setNomEvaluation('1ère sequence');
        $notes1->setMatieres($this->getReference('matieres1'));
        $notes1->setCoeff(2);
        $notes1->setValeur(12);
        $notes1->setStudents($this->getReference('students1'));
        $notes1->setCommentaire('passable');
        $manager->persist($notes1);

        $notes2 = new Notes();
        $notes2->setNomEvaluation('1ère sequence');
        $notes2->setMatieres($this->getReference('matieres1'));
        $notes2->setCoeff(2);
        $notes2->setValeur(10);
        $notes2->setStudents($this->getReference('students2'));
        $notes2->setCommentaire('encore d\'éffort à fournir');
        $manager->persist($notes2);

        $notes3 = new Notes();
        $notes3->setNomEvaluation('1ère sequence');
        $notes3->setMatieres($this->getReference('matieres1'));
        $notes3->setCoeff(2);
        $notes3->setValeur(9);
        $notes3->setStudents($this->getReference('students3'));
        $notes3->setCommentaire('mediocre');
        $manager->persist($notes3);

        $notes4 = new Notes();
        $notes4->setNomEvaluation('1ère sequence');
        $notes4->setMatieres($this->getReference('matieres1'));
        $notes4->setCoeff(2);
        $notes4->setValeur(15);
        $notes4->setStudents($this->getReference('students4'));
        $notes4->setCommentaire('très bien');
        $manager->persist($notes4);

        $notes5 = new Notes();
        $notes5->setNomEvaluation('1ère sequence');
        $notes5->setMatieres($this->getReference('matieres1'));
        $notes5->setCoeff(2);
        $notes5->setValeur(7);
        $notes5->setStudents($this->getReference('students5'));
        $notes5->setCommentaire('mauvais');
        $manager->persist($notes5);

        $notes6 = new Notes();
        $notes6->setNomEvaluation('1ère sequence');
        $notes6->setMatieres($this->getReference('matieres1'));
        $notes6->setCoeff(2);
        $notes6->setValeur(9);
        $notes6->setStudents($this->getReference('students6'));
        $notes6->setCommentaire('encore d\'éffort à fournir');
        $manager->persist($notes6);

        $notes7 = new Notes();
        $notes7->setNomEvaluation('1ère sequence');
        $notes7->setMatieres($this->getReference('matieres1'));
        $notes7->setCoeff(2);
        $notes7->setValeur(16);
        $notes7->setStudents($this->getReference('students7'));
        $notes7->setCommentaire('Bien');
        $manager->persist($notes7);

        $notes8 = new Notes();
        $notes8->setNomEvaluation('1ère sequence');
        $notes8->setMatieres($this->getReference('matieres1'));
        $notes8->setCoeff(2);
        $notes8->setValeur(14.5);
        $notes8->setStudents($this->getReference('students8'));
        $notes8->setCommentaire('assez bien');
        $manager->persist($notes8);

        $notes9 = new Notes();
        $notes9->setNomEvaluation('1ère sequence');
        $notes9->setMatieres($this->getReference('matieres1'));
        $notes9->setCoeff(2);
        $notes9->setValeur(11.5);
        $notes9->setStudents($this->getReference('students9'));
        $notes9->setCommentaire('passable');
        $manager->persist($notes9);

        $notes10 = new Notes();
        $notes10->setNomEvaluation('1ère sequence');
        $notes10->setMatieres($this->getReference('matieres1'));
        $notes10->setCoeff(2);
        $notes10->setValeur(8);
        $notes10->setStudents($this->getReference('students10'));
        $notes10->setCommentaire('encore d\'éffort à fournir');
        $manager->persist($notes10);

        $notes11 = new Notes();
        $notes11->setNomEvaluation('1ère sequence');
        $notes11->setMatieres($this->getReference('matieres1'));
        $notes11->setCoeff(2);
        $notes11->setValeur(9);
        $notes11->setStudents($this->getReference('students11'));
        $notes11->setCommentaire('mediocre');
        $manager->persist($notes11);

        $notes12 = new Notes();
        $notes12->setNomEvaluation('1ère sequence');
        $notes12->setMatieres($this->getReference('matieres1'));
        $notes12->setCoeff(2);
        $notes12->setValeur(17);
        $notes12->setStudents($this->getReference('students12'));
        $notes12->setCommentaire('très bien');
        $manager->persist($notes12);

        $notes13 = new Notes();
        $notes13->setNomEvaluation('1ère sequence');
        $notes13->setMatieres($this->getReference('matieres1'));
        $notes13->setCoeff(2);
        $notes13->setValeur(10.5);
        $notes13->setStudents($this->getReference('students13'));
        $notes13->setCommentaire('passable');
        $manager->persist($notes13);

        $notes14 = new Notes();
        $notes14->setNomEvaluation('1ère sequence');
        $notes14->setMatieres($this->getReference('matieres1'));
        $notes14->setCoeff(2);
        $notes14->setValeur(6);
        $notes14->setStudents($this->getReference('students14'));
        $notes14->setCommentaire('mauvais');
        $manager->persist($notes14);

        $notes15 = new Notes();
        $notes15->setNomEvaluation('1ère sequence');
        $notes15->setMatieres($this->getReference('matieres1'));
        $notes15->setCoeff(2);
        $notes15->setValeur(0);
        $notes15->setStudents($this->getReference('students15'));
        $notes15->setCommentaire('null');
        $manager->persist($notes15);

        $notes16 = new Notes();
        $notes16->setNomEvaluation('1ère sequence');
        $notes16->setMatieres($this->getReference('matieres1'));
        $notes16->setCoeff(2);
        $notes16->setValeur(11.5);
        $notes16->setStudents($this->getReference('students16'));
        $notes16->setCommentaire('passable');
        $manager->persist($notes16);

        $notes17 = new Notes();
        $notes17->setNomEvaluation('1ère sequence');
        $notes17->setMatieres($this->getReference('matieres1'));
        $notes17->setCoeff(2);
        $notes17->setValeur(13.5);
        $notes17->setStudents($this->getReference('students17'));
        $notes17->setCommentaire('assez bien');
        $manager->persist($notes17);

        $notes18 = new Notes();
        $notes18->setNomEvaluation('1ère sequence');
        $notes18->setMatieres($this->getReference('matieres1'));
        $notes18->setCoeff(2);
        $notes18->setValeur(5);
        $notes18->setStudents($this->getReference('students18'));
        $notes18->setCommentaire('mauvais');
        $manager->persist($notes18);

        $notes19 = new Notes();
        $notes19->setNomEvaluation('1ère sequence');
        $notes19->setMatieres($this->getReference('matieres1'));
        $notes19->setCoeff(2);
        $notes19->setValeur(7);
        $notes19->setStudents($this->getReference('students19'));
        $notes19->setCommentaire('mauvais');
        $manager->persist($notes19);

        $notes20 = new Notes();
        $notes20->setNomEvaluation('1ère sequence');
        $notes20->setMatieres($this->getReference('matieres1'));
        $notes20->setCoeff(2);
        $notes20->setValeur(3);
        $notes20->setStudents($this->getReference('students20'));
        $notes20->setCommentaire('mauvais');
        $manager->persist($notes20);

//second

        $notes21 = new Notes();
        $notes21->setNomEvaluation('2eme sequence');
        $notes21->setMatieres($this->getReference('matieres1'));
        $notes21->setCoeff(2);
        $notes21->setValeur(14);
        $notes21->setStudents($this->getReference('students1'));
        $notes21->setCommentaire('bien');
        $manager->persist($notes21);

        $notes22 = new Notes();
        $notes22->setNomEvaluation('2eme sequence');
        $notes22->setMatieres($this->getReference('matieres1'));
        $notes22->setCoeff(2);
        $notes22->setValeur(6);
        $notes22->setStudents($this->getReference('students2'));
        $notes22->setCommentaire('encore d\'éffort à fournir');
        $manager->persist($notes22);

        $notes23 = new Notes();
        $notes23->setNomEvaluation('2eme sequence');
        $notes23->setMatieres($this->getReference('matieres1'));
        $notes23->setCoeff(2);
        $notes23->setValeur(13);
        $notes23->setStudents($this->getReference('students3'));
        $notes23->setCommentaire('assez bien');
        $manager->persist($notes23);

        $notes24 = new Notes();
        $notes24->setNomEvaluation('2eme sequence');
        $notes24->setMatieres($this->getReference('matieres1'));
        $notes24->setCoeff(2);
        $notes24->setValeur(11);
        $notes24->setStudents($this->getReference('students4'));
        $notes24->setCommentaire('passable');
        $manager->persist($notes24);

        $notes25 = new Notes();
        $notes25->setNomEvaluation('2eme sequence');
        $notes25->setMatieres($this->getReference('matieres1'));
        $notes25->setCoeff(2);
        $notes25->setValeur(9);
        $notes25->setStudents($this->getReference('students5'));
        $notes25->setCommentaire('inssuffissant');
        $manager->persist($notes25);

        $notes26 = new Notes();
        $notes26->setNomEvaluation('2eme sequence');
        $notes26->setMatieres($this->getReference('matieres1'));
        $notes26->setCoeff(2);
        $notes26->setValeur(10);
        $notes26->setStudents($this->getReference('students6'));
        $notes26->setCommentaire('passable');
        $manager->persist($notes26);

        $notes27 = new Notes();
        $notes27->setNomEvaluation('2eme sequence');
        $notes27->setMatieres($this->getReference('matieres1'));
        $notes27->setCoeff(2);
        $notes27->setValeur(18);
        $notes27->setStudents($this->getReference('students7'));
        $notes27->setCommentaire('très bien');
        $manager->persist($notes27);

        $notes28 = new Notes();
        $notes28->setNomEvaluation('2eme sequence');
        $notes28->setMatieres($this->getReference('matieres1'));
        $notes28->setCoeff(2);
        $notes28->setValeur(12.5);
        $notes28->setStudents($this->getReference('students8'));
        $notes28->setCommentaire('assez bien');
        $manager->persist($notes28);

        $notes29 = new Notes();
        $notes29->setNomEvaluation('2eme sequence');
        $notes29->setMatieres($this->getReference('matieres1'));
        $notes29->setCoeff(2);
        $notes29->setValeur(13.5);
        $notes29->setStudents($this->getReference('students9'));
        $notes29->setCommentaire('assez bien');
        $manager->persist($notes29);

        $notes30 = new Notes();
        $notes30->setNomEvaluation('2eme sequence');
        $notes30->setMatieres($this->getReference('matieres1'));
        $notes30->setCoeff(2);
        $notes30->setValeur(9);
        $notes30->setStudents($this->getReference('students10'));
        $notes30->setCommentaire('encore d\'éffort à fournir');
        $manager->persist($notes30);

        $notes31 = new Notes();
        $notes31->setNomEvaluation('2eme sequence');
        $notes31->setMatieres($this->getReference('matieres1'));
        $notes31->setCoeff(2);
        $notes31->setValeur(3);
        $notes31->setStudents($this->getReference('students11'));
        $notes31->setCommentaire('très médiocre');
        $manager->persist($notes31);

        $notes32 = new Notes();
        $notes32->setNomEvaluation('2eme sequence');
        $notes32->setMatieres($this->getReference('matieres1'));
        $notes32->setCoeff(2);
        $notes32->setValeur(18.6);
        $notes32->setStudents($this->getReference('students12'));
        $notes32->setCommentaire('très bien');
        $manager->persist($notes32);

        $notes33 = new Notes();
        $notes33->setNomEvaluation('2eme sequence');
        $notes33->setMatieres($this->getReference('matieres1'));
        $notes33->setCoeff(2);
        $notes33->setValeur(17);
        $notes33->setStudents($this->getReference('students12'));
        $notes33->setCommentaire('très bien');
        $manager->persist($notes33);

        $notes34 = new Notes();
        $notes34->setNomEvaluation('2eme sequence');
        $notes34->setMatieres($this->getReference('matieres1'));
        $notes34->setCoeff(2);
        $notes34->setValeur(11.5);
        $notes34->setStudents($this->getReference('students13'));
        $notes34->setCommentaire('passable');
        $manager->persist($notes34);

        $notes35 = new Notes();
        $notes35->setNomEvaluation('2eme sequence');
        $notes35->setMatieres($this->getReference('matieres1'));
        $notes35->setCoeff(2);
        $notes35->setValeur(15);
        $notes35->setStudents($this->getReference('students14'));
        $notes35->setCommentaire('bien');
        $manager->persist($notes35);

        $notes36 = new Notes();
        $notes36->setNomEvaluation('2eme sequence');
        $notes36->setMatieres($this->getReference('matieres1'));
        $notes36->setCoeff(2);
        $notes36->setValeur(0);
        $notes36->setStudents($this->getReference('students15'));
        $notes36->setCommentaire('null');
        $manager->persist($notes36);

        $notes37 = new Notes();
        $notes37->setNomEvaluation('2eme sequence');
        $notes37->setMatieres($this->getReference('matieres1'));
        $notes37->setCoeff(2);
        $notes37->setValeur(12.5);
        $notes37->setStudents($this->getReference('students16'));
        $notes37->setCommentaire('assez bien');
        $manager->persist($notes37);

        $notes38 = new Notes();
        $notes38->setNomEvaluation('2eme sequence');
        $notes38->setMatieres($this->getReference('matieres1'));
        $notes38->setCoeff(2);
        $notes38->setValeur(13.5);
        $notes38->setStudents($this->getReference('students17'));
        $notes38->setCommentaire('assez bien');
        $manager->persist($notes38);

        $notes39 = new Notes();
        $notes39->setNomEvaluation('2eme sequence');
        $notes39->setMatieres($this->getReference('matieres1'));
        $notes39->setCoeff(2);
        $notes39->setValeur(2);
        $notes39->setStudents($this->getReference('students18'));
        $notes39->setCommentaire('null');
        $manager->persist($notes39);

        $notes40 = new Notes();
        $notes40->setNomEvaluation('2eme sequence');
        $notes40->setMatieres($this->getReference('matieres1'));
        $notes40->setCoeff(2);
        $notes40->setValeur(8.5);
        $notes40->setStudents($this->getReference('students19'));
        $notes40->setCommentaire('mauvais');
        $manager->persist($notes40);

        //tird
        $notes41 = new Notes();
        $notes41->setNomEvaluation('1ère sequence');
        $notes41->setMatieres($this->getReference('matieres10'));
        $notes41->setCoeff(4);
        $notes41->setValeur(3);
        $notes41->setStudents($this->getReference('students20'));
        $notes41->setCommentaire('mauvais');
        $manager->persist($notes41);

        $notes42 = new Notes();
        $notes42->setNomEvaluation('1ère sequence');
        $notes42->setMatieres($this->getReference('matieres10'));
        $notes42->setCoeff(4);
        $notes42->setValeur(12.5);
        $notes42->setStudents($this->getReference('students1'));
        $notes42->setCommentaire('passable');
        $manager->persist($notes42);

        $notes43 = new Notes();
        $notes43->setNomEvaluation('1ère sequence');
        $notes43->setMatieres($this->getReference('matieres10'));
        $notes43->setCoeff(4);
        $notes43->setValeur(13.5);
        $notes43->setStudents($this->getReference('students2'));
        $notes43->setCommentaire('assez bien');
        $manager->persist($notes43);

        $notes44 = new Notes();
        $notes44->setNomEvaluation('1ère sequence');
        $notes44->setMatieres($this->getReference('matieres10'));
        $notes44->setCoeff(4);
        $notes44->setValeur(13);
        $notes44->setStudents($this->getReference('students3'));
        $notes44->setCommentaire('assez bien');
        $manager->persist($notes44);

        $notes45 = new Notes();
        $notes45->setNomEvaluation('1ère sequence');
        $notes45->setMatieres($this->getReference('matieres10'));
        $notes45->setCoeff(4);
        $notes45->setValeur(16.75);
        $notes45->setStudents($this->getReference('students4'));
        $notes45->setCommentaire('très bien');
        $manager->persist($notes45);

        $notes46 = new Notes();
        $notes46->setNomEvaluation('1ère sequence');
        $notes46->setMatieres($this->getReference('matieres10'));
        $notes46->setCoeff(4);
        $notes46->setValeur(5);
        $notes46->setStudents($this->getReference('students5'));
        $notes46->setCommentaire('mauvais');
        $manager->persist($notes46);

        $notes47 = new Notes();
        $notes47->setNomEvaluation('1ère sequence');
        $notes47->setMatieres($this->getReference('matieres10'));
        $notes47->setCoeff(2);
        $notes47->setValeur(9);
        $notes47->setStudents($this->getReference('students6'));
        $notes47->setCommentaire('encore d\'éffort à fournir');
        $manager->persist($notes47);

        $notes48 = new Notes();
        $notes48->setNomEvaluation('1ère sequence');
        $notes48->setMatieres($this->getReference('matieres1'));
        $notes48->setCoeff(4);
        $notes48->setValeur(16.5);
        $notes48->setStudents($this->getReference('students7'));
        $notes48->setCommentaire('Bien');
        $manager->persist($notes48);

        $notes49 = new Notes();
        $notes49->setNomEvaluation('1ère sequence');
        $notes49->setMatieres($this->getReference('matieres10'));
        $notes49->setCoeff(4);
        $notes49->setValeur(1.5);
        $notes49->setStudents($this->getReference('students8'));
        $notes49->setCommentaire('mauvais');
        $manager->persist($notes49);

        $notes50 = new Notes();
        $notes50->setNomEvaluation('1ère sequence');
        $notes50->setMatieres($this->getReference('matieres10'));
        $notes50->setCoeff(4);
        $notes50->setValeur(10.5);
        $notes50->setStudents($this->getReference('students9'));
        $notes50->setCommentaire('passable');
        $manager->persist($notes50);

        $notes51 = new Notes();
        $notes51->setNomEvaluation('1ère sequence');
        $notes51->setMatieres($this->getReference('matieres10'));
        $notes51->setCoeff(4);
        $notes51->setValeur(7);
        $notes51->setStudents($this->getReference('students10'));
        $notes51->setCommentaire('médiocre');
        $manager->persist($notes51);

        $notes52 = new Notes();
        $notes52->setNomEvaluation('1ère sequence');
        $notes52->setMatieres($this->getReference('matieres10'));
        $notes52->setCoeff(4);
        $notes52->setValeur(5.25);
        $notes52->setStudents($this->getReference('students11'));
        $notes52->setCommentaire('mediocre');
        $manager->persist($notes52);

        $notes53 = new Notes();
        $notes53->setNomEvaluation('1ère sequence');
        $notes53->setMatieres($this->getReference('matieres10'));
        $notes53->setCoeff(4);
        $notes53->setValeur(15);
        $notes53->setStudents($this->getReference('students12'));
        $notes53->setCommentaire('très bien');
        $manager->persist($notes53);

        $notes54 = new Notes();
        $notes54->setNomEvaluation('1ère sequence');
        $notes54->setMatieres($this->getReference('matieres10'));
        $notes54->setCoeff(4);
        $notes54->setValeur(14.5);
        $notes54->setStudents($this->getReference('students13'));
        $notes54->setCommentaire('bien');
        $manager->persist($notes54);

        $notes55 = new Notes();
        $notes55->setNomEvaluation('1ère sequence');
        $notes55->setMatieres($this->getReference('matieres10'));
        $notes55->setCoeff(4);
        $notes55->setValeur(6.5);
        $notes55->setStudents($this->getReference('students14'));
        $notes55->setCommentaire('mauvais');
        $manager->persist($notes55);

        $notes56 = new Notes();
        $notes56->setNomEvaluation('1ère sequence');
        $notes56->setMatieres($this->getReference('matieres10'));
        $notes56->setCoeff(4);
        $notes56->setValeur(10);
        $notes56->setStudents($this->getReference('students15'));
        $notes56->setCommentaire('faut te mettre au travail');
        $manager->persist($notes56);

        $notes57 = new Notes();
        $notes57->setNomEvaluation('1ère sequence');
        $notes57->setMatieres($this->getReference('matieres10'));
        $notes57->setCoeff(4);
        $notes57->setValeur(13.5);
        $notes57->setStudents($this->getReference('students16'));
        $notes57->setCommentaire('assez bien');
        $manager->persist($notes57);

        $notes58 = new Notes();
        $notes58->setNomEvaluation('1ère sequence');
        $notes58->setMatieres($this->getReference('matieres10'));
        $notes58->setCoeff(4);
        $notes58->setValeur(16);
        $notes58->setStudents($this->getReference('students17'));
        $notes58->setCommentaire(' bien');
        $manager->persist($notes58);

        $notes59 = new Notes();
        $notes59->setNomEvaluation('1ère sequence');
        $notes59->setMatieres($this->getReference('matieres10'));
        $notes59->setCoeff(4);
        $notes59->setValeur(14);
        $notes59->setStudents($this->getReference('students18'));
        $notes59->setCommentaire('bien');
        $manager->persist($notes59);

        $notes60 = new Notes();
        $notes60->setNomEvaluation('1ère sequence');
        $notes60->setMatieres($this->getReference('matieres10'));
        $notes60->setCoeff(4);
        $notes60->setValeur(9);
        $notes60->setStudents($this->getReference('students19'));
        $notes60->setCommentaire('légère progression');
        $manager->persist($notes60);

        //philo
        $notes61 = new Notes();
        $notes61->setNomEvaluation('1ère sequence');
        $notes61->setMatieres($this->getReference('matieres2'));
        $notes61->setCoeff(2);
        $notes61->setValeur(14);
        $notes61->setStudents($this->getReference('students1'));
        $notes61->setCommentaire('bien');
        $manager->persist($notes61);

        $notes62 = new Notes();
        $notes62->setNomEvaluation('1ère sequence');
        $notes62->setMatieres($this->getReference('matieres2'));
        $notes62->setCoeff(2);
        $notes62->setValeur(9.75);
        $notes62->setStudents($this->getReference('students2'));
        $notes62->setCommentaire('insuffisant');
        $manager->persist($notes62);


        $notes63 = new Notes();
        $notes63->setNomEvaluation('1ère sequence');
        $notes63->setMatieres($this->getReference('matieres2'));
        $notes63->setCoeff(2);
        $notes63->setValeur(11);
        $notes63->setStudents($this->getReference('students3'));
        $notes63->setCommentaire('passable');
        $manager->persist($notes63);

        $notes64 = new Notes();
        $notes64->setNomEvaluation('1ère sequence');
        $notes64->setMatieres($this->getReference('matieres2'));
        $notes64->setCoeff(2);
        $notes64->setValeur(10);
        $notes64->setStudents($this->getReference('students4'));
        $notes64->setCommentaire('passable');
        $manager->persist($notes64);

        $notes65 = new Notes();
        $notes65->setNomEvaluation('1ère sequence');
        $notes65->setMatieres($this->getReference('matieres2'));
        $notes65->setCoeff(2);
        $notes65->setValeur(15.25);
        $notes65->setStudents($this->getReference('students5'));
        $notes65->setCommentaire('bien');
        $manager->persist($notes65);

        $notes66 = new Notes();
        $notes66->setNomEvaluation('1ère sequence');
        $notes66->setMatieres($this->getReference('matieres2'));
        $notes66->setCoeff(2);
        $notes66->setValeur(13);
        $notes66->setStudents($this->getReference('students6'));
        $notes66->setCommentaire('assez bien ');
        $manager->persist($notes66);

        $notes67 = new Notes();
        $notes67->setNomEvaluation('1ère sequence');
        $notes67->setMatieres($this->getReference('matieres2'));
        $notes67->setCoeff(2);
        $notes67->setValeur(8);
        $notes67->setStudents($this->getReference('students7'));
        $notes67->setCommentaire('inssuffisant');
        $manager->persist($notes67);

        $notes68 = new Notes();
        $notes68->setNomEvaluation('1ère sequence');
        $notes68->setMatieres($this->getReference('matieres2'));
        $notes68->setCoeff(2);
        $notes68->setValeur(13.25);
        $notes68->setStudents($this->getReference('students8'));
        $notes68->setCommentaire('assez bien ');
        $manager->persist($notes68);

        $notes69 = new Notes();
        $notes69->setNomEvaluation('1ère sequence');
        $notes69->setMatieres($this->getReference('matieres2'));
        $notes69->setCoeff(2);
        $notes69->setValeur(16);
        $notes69->setStudents($this->getReference('students18'));
        $notes69->setCommentaire(' très bien');
        $manager->persist($notes69);

        $notes70 = new Notes();
        $notes70->setNomEvaluation('1ère sequence');
        $notes70->setMatieres($this->getReference('matieres2'));
        $notes70->setCoeff(2);
        $notes70->setValeur(5);
        $notes70->setStudents($this->getReference('students9'));
        $notes70->setCommentaire('médiocre ');
        $manager->persist($notes70);

        $notes71 = new Notes();
        $notes71->setNomEvaluation('1ère sequence');
        $notes71->setMatieres($this->getReference('matieres2'));
        $notes71->setCoeff(2);
        $notes71->setValeur(3);
        $notes71->setStudents($this->getReference('students10'));
        $notes71->setCommentaire('mauvaix');
        $manager->persist($notes71);

        $notes72 = new Notes();
        $notes72->setNomEvaluation('1ère sequence');
        $notes72->setMatieres($this->getReference('matieres2'));
        $notes72->setCoeff(2);
        $notes72->setValeur(9);
        $notes72->setStudents($this->getReference('students11'));
        $notes72->setCommentaire('inssuffisant');
        $manager->persist($notes72);

        $notes73 = new Notes();
        $notes73->setNomEvaluation('1ère sequence');
        $notes73->setMatieres($this->getReference('matieres2'));
        $notes73->setCoeff(2);
        $notes73->setValeur(19);
        $notes73->setStudents($this->getReference('students12'));
        $notes73->setCommentaire('excelent ');
        $manager->persist($notes73);

        $notes74 = new Notes();
        $notes74->setNomEvaluation('1ère sequence');
        $notes74->setMatieres($this->getReference('matieres2'));
        $notes74->setCoeff(2);
        $notes74->setValeur(10);
        $notes74->setStudents($this->getReference('students13'));
        $notes74->setCommentaire('passable ');
        $manager->persist($notes74);

        $notes75 = new Notes();
        $notes75->setNomEvaluation('1ère sequence');
        $notes75->setMatieres($this->getReference('matieres2'));
        $notes75->setCoeff(2);
        $notes75->setValeur(12.50);
        $notes75->setStudents($this->getReference('students14'));
        $notes75->setCommentaire(' assez bien');
        $manager->persist($notes75);

        $notes76 = new Notes();
        $notes76->setNomEvaluation('1ère sequence');
        $notes76->setMatieres($this->getReference('matieres2'));
        $notes76->setCoeff(2);
        $notes76->setValeur(9);
        $notes76->setStudents($this->getReference('students15'));
        $notes76->setCommentaire(' médiocre');
        $manager->persist($notes76);

        $notes77 = new Notes();
        $notes77->setNomEvaluation('1ère sequence');
        $notes77->setMatieres($this->getReference('matieres2'));
        $notes77->setCoeff(2);
        $notes77->setValeur(11.25);
        $notes77->setStudents($this->getReference('students16'));
        $notes77->setCommentaire('passable');
        $manager->persist($notes77);

        $notes78 = new Notes();
        $notes78->setNomEvaluation('1ère sequence');
        $notes78->setMatieres($this->getReference('matieres2'));
        $notes78->setCoeff(2);
        $notes78->setValeur(13);
        $notes78->setStudents($this->getReference('students17'));
        $notes78->setCommentaire(' assez bien');
        $manager->persist($notes78);

        $notes79 = new Notes();
        $notes79->setNomEvaluation('1ère sequence');
        $notes79->setMatieres($this->getReference('matieres2'));
        $notes79->setCoeff(2);
        $notes79->setValeur(14.25);
        $notes79->setStudents($this->getReference('students18'));
        $notes79->setCommentaire(' bien');
        $manager->persist($notes79);

        $notes80 = new Notes();
        $notes80->setNomEvaluation('1ère sequence');
        $notes80->setMatieres($this->getReference('matieres2'));
        $notes80->setCoeff(2);
        $notes80->setValeur(10);
        $notes80->setStudents($this->getReference('students20'));
        $notes80->setCommentaire('passable ');
        $manager->persist($notes80);

        $notes81 = new Notes();
        $notes81->setNomEvaluation('1ère sequence');
        $notes81->setMatieres($this->getReference('matieres3'));
        $notes81->setCoeff(3);
        $notes81->setValeur(14.75);
        $notes81->setStudents($this->getReference('students1'));
        $notes81->setCommentaire('bien');
        $manager->persist($notes81);






        $manager->flush();

        $this->addReference('notes1', $notes1);
        $this->addReference('notes2', $notes2);
        $this->addReference('notes3', $notes3);
        $this->addReference('notes4', $notes4);
        $this->addReference('notes5', $notes5);
        $this->addReference('notes6', $notes6);
        $this->addReference('notes7', $notes7);
        $this->addReference('notes8', $notes8);
        $this->addReference('notes9', $notes9);
        $this->addReference('notes10', $notes10);
        $this->addReference('notes11', $notes11);
        $this->addReference('notes12', $notes12);
        $this->addReference('notes13', $notes13);
        $this->addReference('notes14', $notes14);
        $this->addReference('notes15', $notes15);
        $this->addReference('notes16', $notes16);
        $this->addReference('notes17', $notes17);
        $this->addReference('notes18', $notes18);
        $this->addReference('notes19', $notes19);

    }

}