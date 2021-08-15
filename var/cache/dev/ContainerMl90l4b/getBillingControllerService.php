<?php

namespace ContainerMl90l4b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBillingControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\BillingController' shared autowired service.
     *
     * @return \App\Controller\BillingController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/BillingController.php';

        $container->services['App\\Controller\\BillingController'] = $instance = new \App\Controller\BillingController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\BillingController', $container));

        return $instance;
    }
}