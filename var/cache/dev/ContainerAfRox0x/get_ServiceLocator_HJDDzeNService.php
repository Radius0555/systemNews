<?php

namespace ContainerAfRox0x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HJDDzeNService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.hJDDzeN' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.hJDDzeN'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['privates', '.errored.A8vteID', NULL, 'Cannot determine controller argument for "App\\Controller\\CommentController::create()": the $doctrine argument is type-hinted with the non-existent class or interface: "App\\Controller\\ManagerRegistry". Did you forget to add a use statement?'],
            'request' => ['privates', '.errored.I5VSCTa', NULL, 'Cannot determine controller argument for "App\\Controller\\CommentController::create()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'doctrine' => '?',
            'request' => '?',
        ]);
    }
}
