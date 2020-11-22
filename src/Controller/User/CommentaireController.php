<?php


namespace App\Controller\User;


use App\Repository\CommentaireRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CommentaireController
 * @package App\Controller\User
 * @IsGranted ("ROLE_USER")
 * @Route("/commantaire",name="commentaire_")
 */
class CommentaireController extends AbstractController implements CommentaireInterface
{

    /**
     * @Route("/users",name="users", methods={"GET"})
     * @IsGranted ("ROLE_ADMIN")
     * @param CommentaireRepository $commentaireRepository
     * @return mixed
     */
    public function getByUser(CommentaireRepository $commentaireRepository)
    {
        // TODO: Implement getByUser() method.
    }

    /**
     * @IsGranted ("ROLE_USER")
     * @Route("/user/all",name="user_all", methods={"GET"})
     * @param CommentaireRepository $commentaireRepository
     * @return mixed
     */
    public function getUserConnexion(CommentaireRepository $commentaireRepository)
    {
        // TODO: Implement getUserConnexion() method.
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin",name="", methods={""})
     * @param CommentaireRepository $commentaireRepository
     * @return mixed
     */
    public function getByDate(CommentaireRepository $commentaireRepository)
    {
        // TODO: Implement getByDate() method.
    }
}