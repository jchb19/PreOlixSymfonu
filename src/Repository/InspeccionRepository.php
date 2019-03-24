<?php

namespace App\Repository;

use App\Entity\Inspeccion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Inspeccion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Inspeccion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Inspeccion[]    findAll()
 * @method Inspeccion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InspeccionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Inspeccion::class);
    }
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->getQuery()
            ->getResult()
            ;
    }
    // /**
    //  * @return Inspeccion[] Returns an array of Inspeccion objects
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
    public function findOneBySomeField($value): ?Inspeccion
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
