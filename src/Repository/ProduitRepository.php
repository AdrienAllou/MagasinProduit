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
        return $this->createQueryBuilder('produit')
            ->select(["produit.nom","(CASE e.id WHEN 3 THEN produit.stock - lc.quantite
                ELSE produit.stock END) as Stock"])
            ->leftJoin("produit.ligneCommandes", "lc",["produit.id = lc.produit_id"])
            ->leftJoin("lc.commande", "c", ["c.id = lc.commande_id"])
            ->leftJoin("c.etat", "e", ["e.id = c.etat_id"])
            ->getQuery()->getResult();
    }

    public function getDisponibiliter(){
        return $this->createQueryBuilder('p')
            ->select(["nom", "prix", "photo", "disponible", "date_lancement", "stock"])
            ->addSelect(["(CASE WHEN stock < 10 THEN 'Il reste peu de produit' ELSE 'Disponible' END) as Disponibilite"])
            ->getQuery()->getResult();
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
