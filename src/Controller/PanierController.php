<?php


namespace App\Controller;


use App\Entity\Panier;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PanierController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/add/produit/{id}",name="addProduit", methods={"POST"})
     * @param $id
     * @param Request $request
     * @param PanierRepository $panierRepository
     * @param ProduitRepository $produitRepository
     * @param UserRepository $userRepository
     * @return RedirectResponse
     */
    public function addOnPanier($id, Request $request, PanierRepository $panierRepository, ProduitRepository $produitRepository,
        UserRepository $userRepository){
        if (!$this->isCsrfTokenValid("addProduitOnPanier", $request->request->get("token")))
            throw $this->createAccessDeniedException("Erreur CsrfToken");
        $produitChoisie = $produitRepository->find($id);
        if ($produitChoisie == null)
            throw $this->createNotFoundException("Le produit n'as pas êtait trouver");

        /**@var Panier $panier*/
        $panier = $panierRepository->findOneBy([
            "user" => $this->getUser(),
            "produit" => $produitChoisie
        ]);
        if ($panier == null){
            $panier = new Panier();
            $panier->setDateAchat(new \DateTime());
            $panier->setQuantite(1);
            $panier->setProduit($produitChoisie);
            $panier->setUser($userRepository->findOneBy(["username" => $this->getUser()->getUsername()]));
            $this->getDoctrine()->getManager()->persist($panier);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("index");
        }
        $panier->setQuantite($panier->getQuantite() + 1);
        $panier->setDateAchat(new \DateTime());

        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("index");
    }

    /**
     * @Route("/delete/produit/{id}",name="delete_panier", methods={"DELETE"})
     */
    public function deleteOnPanier($id, Request $request, ProduitRepository $produitRepository, PanierRepository $panierRepository){
        if (!$this->isCsrfTokenValid("deleteProduitOnPanier", $request->request->get("token")))
            throw $this->createAccessDeniedException("Erreur CsrfToken");
        $produitChoisie = $produitRepository->find($id);
        if ($produitChoisie == null)
            throw $this->createNotFoundException("Le produit n'as pas êtait trouver");

        /**@var Panier $panier*/
        $panier = $panierRepository->findOneBy([
            "user" => $this->getUser(),
            "produit" => $produitChoisie
        ]);

        if ($panier == null)
            throw $this->createNotFoundException("Le produit n'existe pas dans le panier");

        if ($panier->getQuantite() - 1 <= 0)
            $this->getDoctrine()->getManager()->remove($panier);
        else{
            $panier->setQuantite($panier->getQuantite() - 1);
            $panier->setDateAchat(new \DateTime());
        }

        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("index");
    }
}