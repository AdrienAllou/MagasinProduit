<?php

namespace App\Repository;

use App\Entity\LigneCommande;
use DateTime;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method LigneCommande|null find($id, $lockMode = null, $lockVersion = null)
 * @method LigneCommande|null findOneBy(array $criteria, array $orderBy = null)
 * @method LigneCommande[]    findAll()
 * @method LigneCommande[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LigneCommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LigneCommande::class);
    }

    // /**
    //  * @return LigneCommande[] Returns an array of LigneCommande objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LigneCommande
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    /**
     * @param DateTime $date
     * @param DateTime $date2
     * @return QueryBuilder
     */
    public function getStatForCommande(DateTime $date, DateTime $date2){
        return $this->createQueryBuilder("lc")
            ->select("p.nom", "count(p.nom) as nombreDeCommande", "sum(lc.prix)", "sum(lc.quantite)")
            ->innerJoin("lc.produit", "p")
            ->innerJoin("lc.commande","c")
            ->where("c.date <= :date")
            ->andWhere("c.date >= :date2")
            ->setParameter("date", $date)
            ->setParameter("date2", $date2)
            ->groupBy("p.nom")
            ->getQuery()
            ->getResult();
    }
}
