<?php

namespace App\Repository;

use App\Entity\UsedCars;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UsedCars>
 *
 * @method UsedCars|null find($id, $lockMode = null, $lockVersion = null)
 * @method UsedCars|null findOneBy(array $criteria, array $orderBy = null)
 * @method UsedCars[]    findAll()
 * @method UsedCars[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UsedCarsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UsedCars::class);
    }

//    /**
//     * @return UsedCars[] Returns an array of UsedCars objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UsedCars
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
