<?php

namespace ContainerX906Abg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentaireControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\User\CommentaireController' shared autowired service.
     *
     * @return \App\Controller\User\CommentaireController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/User/CommentaireController.php';

        $container->services['App\\Controller\\User\\CommentaireController'] = $instance = new \App\Controller\User\CommentaireController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\User\\CommentaireController', $container));

        return $instance;
    }
}
