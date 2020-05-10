<?php

namespace App\Repository;

use App\Entity\Excillencestudent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Excillencestudent|null find($id, $lockMode = null, $lockVersion = null)
 * @method Excillencestudent|null findOneBy(array $criteria, array $orderBy = null)
 * @method Excillencestudent[]    findAll()
 * @method Excillencestudent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExcillencestudentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Excillencestudent::class);
    }

    // /**
    //  * @return Excillencestudent[] Returns an array of Excillencestudent objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Excillencestudent
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
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
            FROM App\Entity\Excillencestudent a
            WHERE a.status = 1
            ORDER BY a.id ASC'
        );

        // returns an array of student
        return $query->getResult();
    }
}
