<?php

namespace App\Repository;

use App\Entity\UU;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UU|null find($id, $lockMode = null, $lockVersion = null)
 * @method UU|null findOneBy(array $criteria, array $orderBy = null)
 * @method UU[]    findAll()
 * @method UU[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UURepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UU::class);
    }

    // /**
    //  * @return UU[] Returns an array of UU objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UU
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
