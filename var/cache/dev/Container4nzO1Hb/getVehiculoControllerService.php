<?php

namespace Container4nzO1Hb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVehiculoControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\VehiculoController' shared autowired service.
     *
     * @return \App\Controller\VehiculoController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/VehiculoController.php';

        $container->services['App\\Controller\\VehiculoController'] = $instance = new \App\Controller\VehiculoController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\VehiculoController', $container));

        return $instance;
    }
}
