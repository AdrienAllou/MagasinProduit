<?php


namespace App\Controller;

use App\Repository\CommandeRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
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
        $commandes = $commandeRepository->findOneBy([
            "user" => $this->getUser()
        ]);
        return $this->render("user/commandes.html.twig", ["commandes" => $commandes]);
    }

}