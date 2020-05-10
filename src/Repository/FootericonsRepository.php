<?php

namespace App\Repository;

use App\Entity\Footericons;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Footericons|null find($id, $lockMode = null, $lockVersion = null)
 * @method Footericons|null findOneBy(array $criteria, array $orderBy = null)
 * @method Footericons[]    findAll()
 * @method Footericons[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FootericonsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Footericons::class);
    }

    // /**
    //  * @return Footericons[] Returns an array of Footericons objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Footericons
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function findActive()
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT a
            FROM App\Entity\Footericons a
            WHERE a.status = 1
            ORDER BY a.id ASC'
        );

        // returns an array of student
        return $query->getResult();
    }
}
