<?php

namespace App\Repository;

use App\Entity\ComptePrestataire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ComptePrestataire|null find($id, $lockMode = null, $lockVersion = null)
 * @method ComptePrestataire|null findOneBy(array $criteria, array $orderBy = null)
 * @method ComptePrestataire[]    findAll()
 * @method ComptePrestataire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComptePrestataireRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ComptePrestataire::class);
    }

    // /**
    //  * @return ComptePrestataire[] Returns an array of ComptePrestataire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ComptePrestataire
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
