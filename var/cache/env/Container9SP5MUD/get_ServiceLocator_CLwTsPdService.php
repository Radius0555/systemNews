<?php

namespace Container9SP5MUD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CLwTsPdService extends App_KernelEnvDebugContainer
{
    /**
     * Gets the private '.service_locator.CLwTsPd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CLwTsPd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['privates', '.errored.yLqt2_V', NULL, 'Cannot determine controller argument for "App\\Controller\\CommentController::update()": the $doctrine argument is type-hinted with the non-existent class or interface: "App\\Controller\\ManagerRegistry". Did you forget to add a use statement?'],
            'request' => ['privates', '.errored.EG2fqwT', NULL, 'Cannot determine controller argument for "App\\Controller\\CommentController::update()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'doctrine' => '?',
            'request' => '?',
        ]);
    }
}
