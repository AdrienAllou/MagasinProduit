<?php


namespace App\Controller;


use App\Repository\CommandeRepository;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class UserController
 * @package App\Controller
 * @Route("/user",name="user_")
 */
class UserController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{

    /**
     * @Route("/",name="index", methods={"GET"})
     */
    public function index(){
        return $this->render("user/index.html.twig");
    }

    public function pageCommande(CommandeRepository $commandeRepository){
        $commande = $commandeRepository->findBy([
            "user" => $this->getUser()
        ]);
    }
}