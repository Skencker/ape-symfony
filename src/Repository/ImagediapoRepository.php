<?php

namespace App\Repository;

use App\Entity\Imagediapo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Imagediapo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Imagediapo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Imagediapo[]    findAll()
 * @method Imagediapo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImagediapoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Imagediapo::class);
    }

    // /**
    //  * @return Imagediapo[] Returns an array of Imagediapo objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Imagediapo
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
