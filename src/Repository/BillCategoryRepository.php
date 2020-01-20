<?php

namespace App\Repository;

use App\Entity\BillCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BillCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method BillCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method BillCategory[]    findAll()
 * @method BillCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BillCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BillCategory::class);
    }
}
