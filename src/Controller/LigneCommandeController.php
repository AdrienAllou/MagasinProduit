<?php


namespace App\Controller;


use App\Entity\Commande;
use App\Entity\LigneCommande;
use App\Repository\CommandeRepository;
use App\Repository\EtatRepository;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ObjectManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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
     * @Route("/add",name="add", methods={"GET", "POST"})
     * @param PanierRepository $panierRepository
     * @param CommandeRepository $commandeRepository
     * @param EtatRepository $etatRepository
     * @param UserRepository $userRepository
     * @param Request $request
     * @param ProduitRepository $produitRepository
     * @return RedirectResponse
     */
    public function add(PanierRepository $panierRepository, CommandeRepository $commandeRepository, EtatRepository $etatRepository,
                UserRepository $userRepository, Request $request, ProduitRepository $produitRepository){
        if (!$this->isCsrfTokenValid("convertionOnCommande", $request->request->get("token")))
            $this->createAccessDeniedException("Error CsrfToken");
        $manager = $this->getDoctrine()->getManager();
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
            $this->getDoctrine()->getManager()->persist($commande);
            $this->getDoctrine()->getManager()->flush();
        }

        foreach ($articleOnPanier as $article) {
            $ligne_Commendande = new LigneCommande();
            $ligne_Commendande->setQuantite($article->getQuantite());
            $ligne_Commendande->setProduit($article->getProduit());
            $ligne_Commendande->setPrix($article->getQuantite() * $article->getProduit()->getPrix());
            $ligne_Commendande->setCommande($commande);
            $article->getProduit()->setStock($article->getProduit()->getStock() - $article->getQuantite());
            if ($article->getProduit()->getStock() <= 0){
                $article->getProduit()->setDisponible(false);
            }
            $this->getDoctrine()->getManager()->persist($ligne_Commendande);
            $this->getDoctrine()->getManager()->flush();
            $this->getDoctrine()->getManager()->persist($article->getProduit());
            $this->getDoctrine()->getManager()->flush();
            $manager->remove($article);
            $manager->flush();
        }

        return $this->redirectToRoute("index");
    }
}