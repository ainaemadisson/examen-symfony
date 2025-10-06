<?php

namespace App\Repository;

use App\Entity\Depot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Depot>
 */
class DepotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Depot::class);
    }

    public function getTotauxParType(): array
    {
        return $this->createQueryBuilder('d')
            ->select('d.type, SUM(d.poidsEstime) as total_poids, COUNT(d.id) as total_depots')
            ->groupBy('d.type')
            ->getQuery()
            ->getResult();
    }

    public function getPoidsTotal(): float
    {
        $result = $this->createQueryBuilder('d')
            ->select('SUM(d.poidsEstime) as total')
            ->getQuery()
            ->getSingleScalarResult();

        return $result ? (float) $result : 0;
    }

    public function getJournalDepots(): array
    {
        return $this->createQueryBuilder('d')
            ->leftJoin('d.pointCollecte', 'p')
            ->addSelect('p')
            ->orderBy('d.date', 'DESC')
            ->getQuery()
            ->getResult();
    }
}