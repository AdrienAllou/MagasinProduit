<?php

namespace ContainerXxK2b9L;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VP68NKcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VP68NKc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VP68NKc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'produitRepository' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'produitRepository' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
