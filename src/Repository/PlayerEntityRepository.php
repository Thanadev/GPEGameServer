<?php

namespace App\Repository;

use App\Entity\PlayerEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PlayerEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method PlayerEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method PlayerEntity[]    findAll()
 * @method PlayerEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PlayerEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlayerEntity::class);
    }

    // /**
    //  * @return PlayerEntity[] Returns an array of PlayerEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PlayerEntity
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
