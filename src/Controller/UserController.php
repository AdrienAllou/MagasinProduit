<?php


namespace App\Controller;


use App\Entity\Commande;
use App\Repository\CommandeRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UserController
 * @package App\Controller
 * @Route("/user",name="user_")
 * @IsGranted ("ROLE_USER")
 */
class UserController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/",name="index", methods={"GET"})
     */
    public function index(){
        return $this->render("user/index.html.twig");
    }

    /**
     * @Route("/commande",name="commande", methods={"GET"})
     * @param CommandeRepository $commandeRepository
     */
    public function pageCommande(CommandeRepository $commandeRepository){
        $commande = $commandeRepository->findBy([
            "user" => $this->getUser()
        ],[
            "date" => "ASC"
        ]);
        return $this->render("user/commandes.html.twig", ["commandes" => $commande]);
    }
}