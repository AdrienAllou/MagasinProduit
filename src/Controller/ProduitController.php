<?php


namespace App\Controller;


use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class ProduitController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/",name="index", methods={"GET"})
     * @param ProduitRepository $produitRepository
     * @return Response
     */
    public function index(ProduitRepository $produitRepository){
        return $this->render("produit/index.html.twig", ["produits" => $produitRepository->findBy(["disponible" => 1])]);
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
     */
    public function delete(Request $request, ProduitRepository $produitRepository){
        $id = $request->request->get("id");
        $this->getDoctrine()->getManager()->remove($produitRepository->find($id));
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("index");
    }

}