<?php

namespace App\Repository;

use App\Entity\UserSystemes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method UserSystemes|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserSystemes|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserSystemes[]    findAll()
 * @method UserSystemes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserSystemesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, UserSystemes::class);
    }

    // /**
    //  * @return UserSystemes[] Returns an array of UserSystemes objects
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
    public function findOneBySomeField($value): ?UserSystemes
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
