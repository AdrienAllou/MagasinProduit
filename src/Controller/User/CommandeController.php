<?php


namespace App\Controller\User;

use App\Entity\Commande;
use App\Repository\CommandeRepository;
use App\Repository\EtatRepository;
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
    public function getLastSales(CommandeRepository $commandeRepository, Request $request){
        $days = $request->get("days");
        /** @var Commande[] $data */
        $data = null;
        if ($days == null)
            $days = 7;
        $data = $commandeRepository->getLastCommandeLastWeek($days);
        return $this->render("commande/statsSales.html.twig",["data" => $data, "days" => $days]);
    }

}