<?php

namespace ContainerX906Abg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProduitControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProduitController' shared autowired service.
     *
     * @return \App\Controller\ProduitController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProduitController.php';

        $container->services['App\\Controller\\ProduitController'] = $instance = new \App\Controller\ProduitController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ProduitController', $container));

        return $instance;
    }
}
