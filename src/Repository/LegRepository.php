<?php

namespace App\Repository;

use App\Entity\Leg;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Leg|null find($id, $lockMode = null, $lockVersion = null)
 * @method Leg|null findOneBy(array $criteria, array $orderBy = null)
 * @method Leg[]    findAll()
 * @method Leg[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Leg::class);
    }

    // /**
    //  * @return Leg[] Returns an array of Leg objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Leg
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
