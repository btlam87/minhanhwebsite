<?php

namespace App\Repository;

use App\Entity\Coursegroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Coursegroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coursegroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coursegroup[]    findAll()
 * @method Coursegroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoursegroupRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Coursegroup::class);
    }

    // /**
    //  * @return Coursegroup[] Returns an array of Coursegroup objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Coursegroup
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
