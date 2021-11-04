<?php

namespace App\Repository;

use App\Entity\Modele;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

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
       
        $query = $this->createQueryBuilder('SELECT * FROM modele where  LOCATE(canonical_name,:searchTerm) order by length(canonical_name) desc')
        ->setParameter('searchTerm', $search);
        $modele = $query->setMaxResults(1)
            ->getQuery();

        return $modele;

    }



}
