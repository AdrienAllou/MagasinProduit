<?php


namespace App\Controller;

use App\Entity\Commentaire;
use App\Entity\Produit;
use App\Entity\ProduitSearch;
use App\Form\CommentaireType;
use App\Form\ProduitSearchType;
use App\Form\ProduitType;
use App\Repository\CommentaireRepository;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProduitController extends AbstractController
{

    /**
     * @Route("/",name="index", methods={"GET"})
     * @param ProduitRepository $produitRepository
     * @return Response
     */
    public function index(ProduitRepository $produitRepository, PanierRepository $panierRepository, Request $request){
        //dd();
        $search = new ProduitSearch();
        $form = $this->createForm(ProduitSearchType::class, $search);
        $form->handleRequest($request);

        $paniers = $panierRepository->findBy(["user" => $this->getUser()]);
        $isValide = true;
        foreach ($paniers as $panier)
            if ($panier->getQuantite() > $panier->getProduit()->getStock()) $isValide = false;
        return $this->render("produit/index.html.twig", [
            "produits" => $produitRepository->findProduits($search),
            "paniers" => $paniers,
            "isValide" => $isValide,
            "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/produit/{id}",name="id", methods={"GET"})
     * @param ProduitRepository $produitRepository
     * @return Response
     */
    public function getProduit($id, ProduitRepository $produitRepository, CommentaireRepository $commentaireRepository,
        UserRepository $userRepository){
        /**@var Produit $produit */
        $produit = $produitRepository->find($id);

        if ($produit == null)
            throw $this->createNotFoundException("Le produit n'existe pas");
        if ($produit->getDisponible() == false)
            throw $this->createNotFoundException("Le produit n'es plus disponible");

        $user = $userRepository->findOneBy(["username" => $this->getUser()->getUsername()]);

        $commentaire = new Commentaire();
        $commentaire->setProduit($produit);
        $commentaire->setAuteur($user);
        $commentaire->setDateEcrit(new \DateTime());
        $form = $this->createForm(CommentaireType::class,$commentaire,[
            "action" => $this->generateUrl("commentaire_add", ["id" => $id])
        ]);

        $isAcheter = false;
        foreach($user->getCommandes() as $commande)
            foreach ($commande->getLigneCommandes() as $lc)
                if ($lc->getProduit()->getId() == $id){
                    $isAcheter = true;
                    break;
                }

        return $this->render("produit/afficheProduit.html.twig",[
            "form" => $form->createView(),
            "isAcheter" => $isAcheter,
            "produit" => $produit,
            "commentaires" => $commentaireRepository->findBy(
                ["Produit" => $produit],
                ["DateEcrit" => 'ASC']
            ),
        ]);
    }

    /**
     * @Route("/addProduit",name="add", methods={"GET","POST"})
     * @param Request $request
     * @param SluggerInterface $slugger
     * @return RedirectResponse|Response
     */
    public function addProduit(Request $request, SluggerInterface $slugger){
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class,$produit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            /** @var UploadedFile $image */
            $image = $form->get("photo")->getData();

            if ($image){
                $originalPath = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFileName = $slugger->slug($originalPath);
                $newFileName = $safeFileName . '-' . uniqid() . '.'. $image->guessClientExtension();

                try {
                    $image->move(
                        $this->getParameter('image_produit_path'), $newFileName
                    );
                }catch (\Exception $e){
                    throw $this->createNotFoundException("Fail upload image");
                }

                $produit->setPhoto($newFileName);
            }

            $this->getDoctrine()->getManager()->persist($produit);
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute("index");
        }

        return $this->render("produit/addProduit.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route("/delete",name="delete", methods={"DELETE"})
     * @param Request $request
     * @param ProduitRepository $produitRepository
     * @return RedirectResponse
     */
    public function delete(Request $request, ProduitRepository $produitRepository){
        $id = $request->request->get("id");
        $this->getDoctrine()->getManager()->remove($produitRepository->find($id));
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("index");
    }

    /**
     * @Route("/edit/{id}/produit", name="edit",  methods={"GET"})
     * @IsGranted("ROLE_ADMIN")
     * @param Request $request
     * @param null $id
     * @param SluggerInterface $slugger
     * @return RedirectResponse|Response
     */
    public function edit(Request $request, $id, SluggerInterface $slugger)
    {
        $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id);
        if (!$produit)  throw $this->createNotFoundException('No produit found for id '.$id);

        $form = $this->createForm(ProduitType::class, $produit , [
            'action' => $this->generateUrl('edit' , ['id'=>$id]),
            'method' =>'GET',
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $image */
            $image = $form->get("photo")->getData();
            if ($image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $image->move(
                        $this->getParameter('image_produit_path'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw $this->createNotFoundException("Fail upload image");
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $produit->setPhoto($newFilename);
            }
            $produit = $form->getData();
            $this->getDoctrine()->getManager()->persist($produit);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('index');

        }
        return $this->render('/produit/editProduit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}