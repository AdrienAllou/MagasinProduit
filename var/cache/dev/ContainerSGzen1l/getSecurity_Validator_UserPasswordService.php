<?php

namespace ContainerSGzen1l;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Validator_UserPasswordService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.validator.user_password' shared service.
     *
     * @return \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Validator/Constraints/UserPasswordValidator.php';

        return $container->privates['security.validator.user_password'] = new \Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.encoder_factory.generic'] ?? $container->load('getSecurity_EncoderFactory_GenericService')));
    }
}
