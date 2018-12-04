<?php

namespace App\Repository;

use App\Entity\FilmText;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FilmText|null find($id, $lockMode = null, $lockVersion = null)
 * @method FilmText|null findOneBy(array $criteria, array $orderBy = null)
 * @method FilmText[]    findAll()
 * @method FilmText[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FilmTextRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FilmText::class);
    }

    // /**
    //  * @return FilmText[] Returns an array of FilmText objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FilmText
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
