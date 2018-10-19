<?php

namespace AppBundle\Repository;

/**
 * ClassesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClassesRepository extends \Doctrine\ORM\EntityRepository
{
    public function getClassesPerSchool($dev)
    {

        $queryB=$this->createQueryBuilder('a');
        $queryB      ->select('c')
            ->from('AppBundle:Classes', 'c')
            ->where('c.etablissements = :dev')
            ->setParameter('dev', $dev);
        return $queryB;
    }
}