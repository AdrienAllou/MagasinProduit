<?php


namespace App\Controller\User;


use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\CommentaireRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CommentaireController
 * @package App\Controller
 * @Route("/commentaire",name="commentaire_")
 * @IsGranted ("ROLE_USER")
 */
class CommentaireController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/",name="index", methods={"GET"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function index(CommentaireRepository $commentaireRepository){
        return $this->render("commentaire/index.html.twig", [
            "commentaires" => $commentaireRepository->findBy([],["auteur" => "ASC"])
        ]);
    }

    /**
     * @Route("/user",name="index_user", methods={"GET"})
     * @IsGranted ("ROLE_USER")
     */
    public function indexUser(CommentaireRepository $commentaireRepository){
        return $this->render("commentaire/index.html.twig", [
            "commentaires" => $commentaireRepository->findBy(["auteur" => $this->getUser()])
        ]);
    }

    /**
     * @Route("/add/{id}", name="add", methods={"GET", "POST"})
     * @param $id
     * @param Request $request
     * @param ProduitRepository $produitRepository
     * @param UserRepository $userRepository
     * @return Response
     */
    public function addCommentaire($id, Request $request, ProduitRepository $produitRepository, UserRepository $userRepository){

        if(!$this->isCsrfTokenValid("addCommentaire" . $id, $request->request->get("token")))
            throw $this->createAccessDeniedException("CSRF invalide");

        $produit = $produitRepository->find($id);
        if ($produit == null)
            throw $this->createNotFoundException("Pas de produit trouvé");

        $commentaire = new Commentaire();
        $commentaire->setProduit($produit);
        $commentaire->setAuteur($userRepository->findOneBy(["username" => $this->getUser()->getUsername()]));
        $commentaire->setDateEcrit(new \DateTime());
        $form = $this->createForm(CommentaireType::class,$commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->getDoctrine()->getManager()->persist($commentaire);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute("index");
        }

        return $this->render("produit/addCommentaire.html.twig", ["form" => $form->createView(), 'produit' => $produit]);
    }



    /**
     * @Route("/delete/{id}",name="delete", methods={"DELETE"})
     * @IsGranted ("ROLE_ADMIN")
     */
    public function delete($id, Request $request, CommentaireRepository $commentaireRepository){
        if (!$this->isCsrfTokenValid("deleteCommentaire" . $id, $request->request->get("token")))
            throw $this->createAccessDeniedException("Csrf invalide");

        $commentaire = $commentaireRepository->find($id);
        if ($commentaire == null)
            throw $this->createNotFoundException("Le produit n'existe pas");

        $this->getDoctrine()->getManager()->remove($commentaire);
        $this->getDoctrine()->getManager()->flush();

        return $this->redirectToRoute("commentaire_index");
    }

}