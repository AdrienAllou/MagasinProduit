<?php


namespace App\Controller;


use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Repository\CommandeRepository;
use App\Repository\EtatRepository;
use App\Repository\PanierRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class LigneCommandeController
 * @package App\Controller
 * @IsGranted ("ROLE_USER")
 * @Route("/ligneCommande",name="ligne_commande_")
 */
class LigneCommandeController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/add",name="add", methods={"GET"})
     */
    public function add(PanierRepository $panierRepository, CommandeRepository $commandeRepository, EtatRepository $etatRepository,
                UserRepository $userRepository){
        $articleOnPanier = $panierRepository->findBy([
            "user" => $this->getUser()
        ]);

        $commande = $commandeRepository->findOneBy([
            "user" => $this->getUser(),
            "etat" => $etatRepository->findBy(["nom" => "En preparation"])
        ]);

        if ($commande == null){
            $commande = new Commande($userRepository->findOneBy(["username" => $this->getUser()->getUsername()]));
            $commande->setEtat($etatRepository->findOneBy(["nom" => "En preparation"]));
        }

        foreach ($articleOnPanier as $article) {
            $ligne_Commendande = new LigneCommande();
            $ligne_Commendande->setQuantite($article->getQuantite());
            $ligne_Commendande->setProduit($article->getProduit());
            $ligne_Commendande->setPrix($article->getQuantite() * $article->getProduit()->getPrix());

        }
    }
}