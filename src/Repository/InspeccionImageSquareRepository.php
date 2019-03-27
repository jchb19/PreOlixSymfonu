<?php

namespace App\Repository;

use App\Entity\InspeccionImageSquare;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method InspeccionImageSquare|null find($id, $lockMode = null, $lockVersion = null)
 * @method InspeccionImageSquare|null findOneBy(array $criteria, array $orderBy = null)
 * @method InspeccionImageSquare[]    findAll()
 * @method InspeccionImageSquare[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InspeccionImageSquareRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InspeccionImageSquare::class);
    }
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->getQuery()
            ->getResult()
            ;
    }
    // /**
    //  * @return InspeccionImageSquare[] Returns an array of InspeccionImageSquare objects
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
    public function findOneBySomeField($value): ?InspeccionImageSquare
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
