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
    /**
     * PlayerEntityRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PlayerEntity::class);
    }
}
