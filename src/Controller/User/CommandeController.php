<?php


namespace App\Controller\User;

use App\Entity\Commande;
use App\Repository\CommandeRepository;
use App\Repository\EtatRepository;
use App\Repository\LigneCommandeRepository;
use App\Repository\UserRepository;
use Exception;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CommandeController
 * @package App\Controller
 * @IsGranted ("ROLE_USER")
 * @Route("/commande",name="commande_")
 */
class CommandeController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/index",name="index", methods={"GET"})
     * @param CommandeRepository $commandeRepository
     * @return Response
     */
    public function index(CommandeRepository $commandeRepository){
        $commandes = $commandeRepository->findAll();
        return $this->render("user/commandes.html.twig", ["commandes" => $commandes]);
    }

    /**
     * @Route("/user",name="find_by_user", methods={"GET"})
     * @param CommandeRepository $commandeRepository
     * @return Response
     */
    public function indexForUser(CommandeRepository $commandeRepository, UserRepository $userRepository){
        $commande = $commandeRepository->findBy([
            "user" => $this->getUser()
        ],[
            "date" => "ASC"
        ]);
        /*dd($commandeRepository->getAllPrice($userRepository->findOneBy(
            ["username" => $this->getUser()->getUsername()]
        )->getId()));*/
        return $this->render("user/commandes.html.twig", ["commandes" => $commande, "TotalPriceCommande" => $commandeRepository->getAllPrice($userRepository->findOneBy(
            ["username" => $this->getUser()->getUsername()]
        )->getId())]);
    }

    /**
     * @Route("/valide/{id}",name="valide_commande", methods={"POST"})
     * @IsGranted ("ROLE_ADMIN")
     * @param $id
     * @param CommandeRepository $commandeRepository
     * @param EtatRepository $etatRepository
     * @return RedirectResponse
     */
    public function valideCommande($id, CommandeRepository $commandeRepository, EtatRepository $etatRepository){
        $commande = $commandeRepository->find($id);
        $commande->setEtat($etatRepository->findOneBy(["nom" => "Expédier"]));
        $this->getDoctrine()->getManager()->flush();
        return $this->redirectToRoute("commande_index");
    }

    /**
     * @Route("/stat/last/sales",name="last_sales", methods={"GET", "POST"})
     * @IsGranted ("ROLE_ADMIN")
     * @param CommandeRepository $commandeRepository
     * @param Request $request
     * @return Response
     * @throws Exception
     */
    public function getLastSales(CommandeRepository $commandeRepository, Request $request, LigneCommandeRepository $ligneCommandeRepository){
        $days = $request->get("days");
        $dateDepart = $request->get("de");
        $dateFin = $request->get("a");
        /** @var Commande[] $data */
        $data = null;
        if ($dateDepart == null)
            $dateDepart = new \DateTime("-7day");
        else
            $dateDepart = new \DateTime($dateDepart);
        if ($dateFin == null)
            $dateFin = new \DateTime();
        else
            $dateFin = new \DateTime($dateFin);
        //$data = $commandeRepository->getLastCommandeLastWeek($days);
        //dd(new \DateTime("-7days"));
        //dd($ligneCommandeRepository->getStatForCommande(new \DateTime(), new \DateTime("-14days")));
        return $this->render("commande/statsSales.html.twig",[
            "data" => $ligneCommandeRepository->getStatForCommande($dateFin,$dateDepart), //Falais inverser
            "days" => $days]);
    }

}