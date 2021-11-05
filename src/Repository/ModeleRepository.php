<?php

namespace App\Repository;

use App\Entity\Modele;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

/**
 * @method Modele|null find($id, $lockMode = null, $lockVersion = null)
 * @method Modele|null findOneBy(array $criteria, array $orderBy = null)
 * @method Modele[]    findAll()
 * @method Modele[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Modele::class);
    }

     /**
      * @return Modele[] Returns an array of Modele objects
      *
    */
    public function findByName($search)
    {

        $rawSql = "SELECT * FROM modele WHERE LOCATE(canonical_name, :searchParam) = 1";
        $stmt = $this->getEntityManager()->getConnection()->prepare($rawSql);
        $stmt->execute(['searchParam' => $search]);
        return $stmt->fetchAll();

    }



}
