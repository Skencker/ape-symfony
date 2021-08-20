<?php

namespace App\Repository;

use App\Entity\ParentsDelegues;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ParentsDelegues|null find($id, $lockMode = null, $lockVersion = null)
 * @method ParentsDelegues|null findOneBy(array $criteria, array $orderBy = null)
 * @method ParentsDelegues[]    findAll()
 * @method ParentsDelegues[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParentsDeleguesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ParentsDelegues::class);
    }

    // /**
    //  * @return ParentsDelegues[] Returns an array of ParentsDelegues objects
    //  */
    
    // public function findByExampleField($value)
    // {
    //     return $this->createQueryBuilder('p')
    //         ->andWhere('p.exampleField = :val')
    //         ->setParameter('val', $value)
    //         ->orderBy('p.id', 'ASC')
    //         ->setMaxResults(10)
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }
    

    /*
    public function findOneBySomeField($value): ?ParentsDelegues
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
