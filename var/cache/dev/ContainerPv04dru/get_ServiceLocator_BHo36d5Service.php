<?php

namespace ContainerPv04dru;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BHo36d5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BHo36d5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BHo36d5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'panierRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
            'produitRepository' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'panierRepository' => 'App\\Repository\\PanierRepository',
            'produitRepository' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
