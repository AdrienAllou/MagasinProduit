<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use App\Security\Authenticator;
use Exception;
use Google_Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     * @param AuthenticationUtils $authenticationUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authenticationUtils, Authenticator $authenticator, GuardAuthenticatorHandler $guard): Response
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
            $user = $this->getDoctrine()->getRepository("App:User")->findOneBy([
                "email" => $email
            ]);
            //dd($email);
            //$this->get("security.authenticator.json_login")->authenticate()
            return $this->redirectToRoute("/");
            //set un token a un user quand je le crée
            //Checker si l'user existe, créer un nouveau user si besoin et récupérer son email
            //return $guard->authenticateUserAndHandleSuccess($user,$request,$authenticator,'default');
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
     * @param \Swift_Mailer $mailer
     * @return Response
     */
    public function inscription(Request $request, Authenticator $authenticator,TokenGeneratorInterface $token, GuardAuthenticatorHandler $guard, UserPasswordEncoderInterface $passwordEncoder, \Swift_Mailer $mailer){
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $user->setRoles(["ROLE_USER"]);
            $user->setPassword($passwordEncoder->encodePassword($user, $user->getPassword()));
            $user->setTokenMail($token->generateToken());
            $this->getDoctrine()->getManager()->persist($user);
            $this->getDoctrine()->getManager()->flush();
            $message = (new \Swift_Message('Incription !'))
                ->setFrom('adrien.allou.dev@gmail.com', "MagasinProduit.fr")
                ->setTo($user->getEmail())

                ->setBody(
                    $this->renderView("email/inscription.html.twig", ["user" => $user]),
                    'text/html'
                )
            ;
            try {
                $mailer->send($message);
                return $this->redirectToRoute("index");
                //return $guard->authenticateUserAndHandleSuccess($user,$request,$authenticator,'default');
            }catch (\Exception $e){
                $this->addFlash("erreurInscript","Votre mail / username existe deja veuiller le changer");
                return $this->render("security/inscription.html.twig", ["form" => $form->createView()]);
            }

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

    /**
     * @Route("/login/{token}", name="app_login_token", methods={"GET"})
     * @param UserRepository $userRepository
     * @param Request $request
     * @param String|null $token
     * @param Authenticator $login
     * @param GuardAuthenticatorHandler $guard
     * @return Response
     */
    public function loginWithToken(UserRepository $userRepository,Request $request, String $token, Authenticator $login, GuardAuthenticatorHandler $guard): Response
    {
        if($userRepository->findToken($token) != null) {
            $user = $userRepository->find($userRepository->findToken($token)[0]);
            if($user->getTokenMail() == $token ) {
                $this->getDoctrine()->getManager()->persist($user);
                $this->getDoctrine()->getManager()->flush();
                $request->request->all();
                return $guard->authenticateUserAndHandleSuccess($user,$request,$login,'default');
            }
            return $this->redirectToRoute('index');
        }
        return $this->render('index');
    }
}
