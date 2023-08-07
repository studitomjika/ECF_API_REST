<?php

namespace App\Repository;

use App\Entity\OpeningsHours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OpeningsHours>
 *
 * @method OpeningsHours|null find($id, $lockMode = null, $lockVersion = null)
 * @method OpeningsHours|null findOneBy(array $criteria, array $orderBy = null)
 * @method OpeningsHours[]    findAll()
 * @method OpeningsHours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpeningsHoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OpeningsHours::class);
    }

//    /**
//     * @return OpeningsHours[] Returns an array of OpeningsHours objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OpeningsHours
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
