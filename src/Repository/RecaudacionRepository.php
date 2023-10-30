<?php

namespace App\Repository;

use App\Entity\Recaudacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Recaudacion>
 *
 * @method Recaudacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method Recaudacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method Recaudacion[]    findAll()
 * @method Recaudacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RecaudacionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recaudacion::class);
    }

//    /**
//     * @return Recaudacion[] Returns an array of Recaudacion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Recaudacion
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
