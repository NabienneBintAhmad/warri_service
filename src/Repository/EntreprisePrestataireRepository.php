<?php

namespace App\Repository;

use App\Entity\EntreprisePrestataire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EntreprisePrestataire|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntreprisePrestataire|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntreprisePrestataire[]    findAll()
 * @method EntreprisePrestataire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntreprisePrestataireRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EntreprisePrestataire::class);
    }

    // /**
    //  * @return EntreprisePrestataire[] Returns an array of EntreprisePrestataire objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EntreprisePrestataire
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
