<?php


namespace App\Controller\User;


use App\Entity\Commande;
use App\Repository\CommandeRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Response;
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
}