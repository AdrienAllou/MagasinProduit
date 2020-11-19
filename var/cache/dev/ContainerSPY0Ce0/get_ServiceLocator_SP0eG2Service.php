<?php

namespace ContainerSPY0Ce0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SP0eG2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sP0eG_2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sP0eG_2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commandeRepository' => ['privates', 'App\\Repository\\CommandeRepository', 'getCommandeRepositoryService', true],
            'etatRepository' => ['privates', 'App\\Repository\\EtatRepository', 'getEtatRepositoryService', true],
        ], [
            'commandeRepository' => 'App\\Repository\\CommandeRepository',
            'etatRepository' => 'App\\Repository\\EtatRepository',
        ]);
    }
}
