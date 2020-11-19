<?php


namespace App\Controller;


use App\Entity\Panier;
use App\Entity\Produit;
use App\Entity\User;
use App\Form\ProduitType;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function index(ProduitRepository $produitRepository, PanierRepository $panierRepository){
        //dd();
        $paniers = $panierRepository->findBy(["user" => $this->getUser()]);
        return $this->render("produit/index.html.twig", [
            "produits" => $produitRepository->findBy(["disponible" => 1]),
            "paniers" => $paniers
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