<?php


namespace App\Controller\admin;


use App\Repository\ProduitRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class AdminController
 * @package App\Controller\admin
 * @Route("/admin",name="admin_")
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/",name="main", methods={"GET"})
     * @Route("/index",name="index", methods={"GET"})
     */
    public function stat(ProduitRepository $produitRepository){
        //TODO Preslav faire twig et mettre les resultats
        dd($produitRepository->getStockSend());//Ici tu as le stock quand l'etat est a 3
        dd($produitRepository->getLastStockInLineCommande()); //Ici tu as le stock - quantiter Dans Tout Les Ligne De Commande
        dd($produitRepository->getLastStockInPanier()); //Ici tu as le stock - quantiterDansToutLesPanier
        dd($produitRepository->getReelStock());//Ici tu as le stock sans aucun achat
        return $this->render("admin/stats.html.twig", ["stockReel" => $produitRepository->getReelStock()]);
    }

}