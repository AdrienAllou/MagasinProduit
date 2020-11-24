<?php


namespace App\Controller\User;


use App\Entity\Commentaire;
use App\Repository\CommentaireRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CommentaireController
 * @package App\Controller
 * @Route("/commentaire",name="commentaire_")
 */
class CommentaireController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/",name="index", methods={"GET"})
     */
    public function index(CommentaireRepository $commentaireRepository){
        return $this->render("commentaire/index.html.twig", ["commentaires" => $commentaireRepository->findAll()]);
    }

    /**
     * @Route("/add/{id}", name="add", methods={"POST"})
     * @param $id
     * @param Request $request
     * @param ProduitRepository $produitRepository
     * @param UserRepository $userRepository
     * @return RedirectResponse
     */
    public function addCommentaire($id, Request $request, ProduitRepository $produitRepository, UserRepository $userRepository){

        if(!$this->isCsrfTokenValid("addCommentaire" . $id, $request->request->get("token")))
            throw $this->createAccessDeniedException("CSRF invalide");

        $produit = $produitRepository->find($id);
        if ($produit == null)
            throw $this->createNotFoundException("Pas de produit trouver");

        $commentaire = new Commentaire();
        $commentaire->setMessage($request->request->get("message"));
        $commentaire->setProduit($produit);
        $commentaire->setAuteur($userRepository->findOneBy(["username" => $this->getUser()->getUsername()]));
        $commentaire->setDateEcrit(new \DateTime());

        $this->getDoctrine()->getManager()->persist($commentaire);
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("index");
    }
}