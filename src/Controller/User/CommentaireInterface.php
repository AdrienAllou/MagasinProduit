<?php


namespace App\Controller\User;


use App\Repository\CommentaireRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;

interface CommentaireInterface
{
    /**
     * @Route("/users",name="users", methods={"GET"})
     * @IsGranted ("ROLE_ADMIN")
     * @param CommentaireRepository $commentaireRepository
     * @return mixed
     */
    public function getByUser(CommentaireRepository $commentaireRepository);

    /**
     * @IsGranted ("ROLE_USER")
     * @Route("/user/all",name="user_all", methods={"GET"})
     * @param CommentaireRepository $commentaireRepository
     * @return mixed
     */
    public function getUserConnexion(CommentaireRepository $commentaireRepository);

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin",name="", methods={""})
     * @param CommentaireRepository $commentaireRepository
     * @return mixed
     */
    public function getByDate(CommentaireRepository $commentaireRepository);
}