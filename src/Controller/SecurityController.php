<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Google_Client;
use mysql_xdevapi\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('index');
        }

        $google = new Google_Client();

        $google->setClientId($this->getParameter("GOOGLE_ID"));
        $google->setClientSecret($this->getParameter("GOOGLE_SECRET"));
        $google->setRedirectUri("http://127.0.0.1:8000/login");
        $google->setScopes("email");

        $auth = $google->createAuthUrl();

        $code = isset($_GET["code"]) ? $_GET["code"] : null;

        if ($code != null){
            try {
                $token = $google->fetchAccessTokenWithAuthCode($code);
                $google->setAccessToken($token);
            }catch (\Exception $e){
            }

            try {
                $pay_load = $google->verifyIdToken();
            }catch (Exception $e){
            }
        }
        else{
            $pay_load = null;
        }

        if ($pay_load != null){
            $email = $pay_load["email"];
            /*$user = $this->getDoctrine()->getRepository("App:User")->findOneBy([
                "email" => $email
            ]);*/
            return $this->redirectToRoute("index");
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error,
            "lien" => $auth]);
    }

    /**
     * @Route("/inscription",name="app_inscription")
     * @param Request $request
     * @param UserPasswordEncoderInterface $passwordEncoder
     * @return Response
     */
    public function inscription(Request $request, UserPasswordEncoderInterface $passwordEncoder){
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $user->setRoles(["ROLE_USER"]);
            $user->setPassword($passwordEncoder->encodePassword($user, $user->getPassword()));
            $this->getDoctrine()->getManager()->persist($user);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute("index");
        }

        return $this->render("security/inscription.html.twig", ["form" => $form->createView()]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        return $this->redirectToRoute("index");
    }
}
