<?php

namespace App\Repository;

use App\Entity\RoomEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method RoomEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method RoomEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method RoomEntity[]    findAll()
 * @method RoomEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoomEntityRepository extends ServiceEntityRepository
{
    /**
     * RoomEntityRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RoomEntity::class);
    }
}
