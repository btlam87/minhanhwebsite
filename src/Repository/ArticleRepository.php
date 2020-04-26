<?php

namespace App\Repository;

use App\Entity\Article;
use App\Entity\Articletype;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

     /**
      * @return Article[] Returns an array of Article objects
      */
    public function findByExampleField($value,$num)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.type = :val')
            ->setParameter('val', $value)
            ->orderBy('a.createdate', 'DESC')
            ->setMaxResults($num)
            ->getQuery()
            ->getResult()
        ;
    }
    
    /**
     * @return Article[]
     */
    public function getSkillarticle(): array
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT a
            FROM App\Entity\Article a, App\Entity\Articletype b
            WHERE a.skill = b.id
            ORDER BY a.id ASC'
        );

        // returns an array of Product objects
        return $query->getResult();
    }    

    public function getOneskillarticle($skill)
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT a
            FROM App\Entity\Article a, App\Entity\Articletype b
            WHERE a.skill = b.id and b.id = '.$skill.'
            ORDER BY a.id ASC'
        );

        // returns an array of Product objects
        return $query->getResult();
    }

    public function getAllskillarticle()
    {
        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT a
            FROM App\Entity\Article a, App\Entity\Articletype b
            WHERE a.skill = b.id
            ORDER BY a.id ASC'
        );

        // returns an array of Product objects
        return $query->getResult();
    }

    public function getArticle($skillname,$articleid)
    {
        
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT a
            FROM App\Entity\Article a, App\Entity\Articletype b
            WHERE a.skill = '.$skillid.', a.skill = b.id, a.id = '.$articleid.', b.name = '.$skillname.' 
            ORDER BY a.id ASC'
        );

        // returns an array of Product objects
        return $query->getResult();
    }

    /**
    * @return Article Returns an Article objects
    */
    public function getSimilararticles($skill_id)
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT a
            FROM App\Entity\Article a 
           WHERE a.skill ='.$skill_id
        );
        return $query->getResult();

    }
    /*
    public function findOneBySomeField($value): ?Article
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
