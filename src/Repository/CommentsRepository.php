<?php

namespace App\Repository;

use App\Entity\Comments;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Comments|null find($id, $lockMode = null, $lockVersion = null)
 * @method Comments|null findOneBy(array $criteria, array $orderBy = null)
 * @method Comments[]    findAll()
 * @method Comments[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Comments::class);
    }

    /**
     * @return Comments[] Returns an array of Comments objects
     */
    
    public function findAllByField($value)
    {
        return $this->createQueryBuilder('c')
        ->andWhere('c.title = :val')
        ->setParameter('val', $value)
        ->orderBy('c.id', 'ASC')
        ->setMaxResults(1000)
        ->getQuery()
        ->getResult()
        ;
    }
    
    public function findOneBySomeField($value): ?Comments
    {
        return $this->createQueryBuilder('c')
        ->andWhere('title = :val')
        ->setParameter('val', $value)
        ->getQuery()
        ->getOneOrNullResult()
        ;
    }
    
}