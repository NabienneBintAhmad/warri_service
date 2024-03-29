<?php

namespace App\Repository;

use App\Entity\UserSystem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserSystem|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserSystem|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserSystem[]    findAll()
 * @method UserSystem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserSystemRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserSystem::class);
    }

    // /**
    //  * @return UserSystem[] Returns an array of UserSystem objects
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
    public function findOneBySomeField($value): ?UserSystem
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
