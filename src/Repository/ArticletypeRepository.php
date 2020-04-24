<?php

namespace App\Repository;

use App\Entity\Articletype;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Articletype|null find($id, $lockMode = null, $lockVersion = null)
 * @method Articletype|null findOneBy(array $criteria, array $orderBy = null)
 * @method Articletype[]    findAll()
 * @method Articletype[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticletypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Articletype::class);
    }

    //  /**
    //   * @return Articletype[] Returns an array of Articletype objects
    //   */
    
    // public function findByExampleField($value)
    // {
    //     return $this->createQueryBuilder('a')
    //         ->andWhere('a.exampleField = :val')
    //         ->setParameter('val', $value)
    //         ->orderBy('a.id', 'ASC')
    //         ->setMaxResults(10)
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }
   
    // public function get_skill()
    // {
    //     return $this->findByExampleField()->setParameter('names','name');
    // }

    /*
    public function findOneBySomeField($value): ?Articletype
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
