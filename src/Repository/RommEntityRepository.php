<?php

namespace App\Repository;

use App\Entity\RommEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RommEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method RommEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method RommEntity[]    findAll()
 * @method RommEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RommEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RommEntity::class);
    }

    // /**
    //  * @return RommEntity[] Returns an array of RommEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RommEntity
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
