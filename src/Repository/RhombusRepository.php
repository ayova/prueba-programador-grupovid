<?php

namespace App\Repository;

use App\Entity\Rhombus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Rhombus|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rhombus|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rhombus[]    findAll()
 * @method Rhombus[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RhombusRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rhombus::class);
    }

    // /**
    //  * @return Rhombus[] Returns an array of Rhombus objects
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
    public function findOneBySomeField($value): ?Rhombus
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
