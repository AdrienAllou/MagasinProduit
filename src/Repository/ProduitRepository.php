<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    // /**
    //  * @return Produit[] Returns an array of Produit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    public function getReelStock(){
        return $this->createQueryBuilder('p')
            ->select(["p.nom", "p.stock"])
            ->getQuery()->getResult();
    }

    public function getLastStockInPanier(){
        return $this->createQueryBuilder('p')
            ->select(["p.nom", "COALESCE(p.stock - paniers.quantite, p.stock) as quantiter"])
            ->leftJoin("p.paniers","paniers",["p.id = paniers.produit_id"])
            ->getQuery()->getResult();
    }

    public function getLastStockInLineCommande(){
        return $this->createQueryBuilder('p')
            ->select(["p.nom", "COALESCE(p.stock - lc.quantite, p.stock) as quantiter"])
            ->leftJoin("p.ligneCommandes","lc",["p.id = lc.produit_id"])
            ->getQuery()->getResult();
    }

    public function getStockSend(){
        /*SELECT produit.nom, COALESCE(produit.stock - lc.quantite, produit.stock) as quantiterRestante FROM produit
LEFT JOIN ligne_commande lc on produit.id = lc.produit_id
LEFT JOIN commande c on lc.commande_id = c.id
LEFT JOIN etat e on e.nom = 'Envoie'
WHERE e.nom = 'Envoie' or produit.id > 0;*/
    }

    /*
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
