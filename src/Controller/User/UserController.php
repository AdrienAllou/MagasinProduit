<?php


namespace App\Controller\User;


use App\Entity\Commande;
use App\Form\UserType;
use App\Repository\CommandeRepository;
use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
     * @Route("/parameter",name="parameter", methods={"GET", "POST"})
     */
    public function parameterProfil(UserRepository $userRepository, Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $user = $userRepository->findOneBy(["username" => $this->getUser()->getUsername()]);

        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $user->setPassword($passwordEncoder->encodePassword($user, $user->getPassword()));
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("index");
        }

        return $this->render("user/parameter.html.twig", ["form" => $form->createView()]);
    }
}