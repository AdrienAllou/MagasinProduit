<?php

namespace ContainerIOpQtQc;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CVNx6TlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cVNx6Tl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cVNx6Tl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ProduitController::addProduit' => ['privates', '.service_locator.1cFtlgg', 'get_ServiceLocator_1cFtlggService', true],
            'App\\Controller\\ProduitController::index' => ['privates', '.service_locator.VP68NKc', 'get_ServiceLocator_VP68NKcService', true],
            'App\\Controller\\SecurityController::inscription' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\admin\\AdminController::stat' => ['privates', '.service_locator.VP68NKc', 'get_ServiceLocator_VP68NKcService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ProduitController:addProduit' => ['privates', '.service_locator.1cFtlgg', 'get_ServiceLocator_1cFtlggService', true],
            'App\\Controller\\ProduitController:index' => ['privates', '.service_locator.VP68NKc', 'get_ServiceLocator_VP68NKcService', true],
            'App\\Controller\\SecurityController:inscription' => ['privates', '.service_locator.j5_bHjD', 'get_ServiceLocator_J5BHjDService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\admin\\AdminController:stat' => ['privates', '.service_locator.VP68NKc', 'get_ServiceLocator_VP68NKcService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ProduitController::addProduit' => '?',
            'App\\Controller\\ProduitController::index' => '?',
            'App\\Controller\\SecurityController::inscription' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\admin\\AdminController::stat' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ProduitController:addProduit' => '?',
            'App\\Controller\\ProduitController:index' => '?',
            'App\\Controller\\SecurityController:inscription' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\admin\\AdminController:stat' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
