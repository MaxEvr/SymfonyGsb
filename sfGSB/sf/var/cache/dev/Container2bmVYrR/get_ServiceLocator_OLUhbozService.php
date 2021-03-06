<?php

namespace Container2bmVYrR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OLUhbozService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oLUhboz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oLUhboz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EtatController::delete' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\EtatController::edit' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\EtatController::index' => ['privates', '.service_locator.GInIfSI', 'get_ServiceLocator_GInIfSIService', true],
            'App\\Controller\\EtatController::show' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\FraisforfaitController::delete' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'App\\Controller\\FraisforfaitController::edit' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'App\\Controller\\FraisforfaitController::index' => ['privates', '.service_locator.RupqPtL', 'get_ServiceLocator_RupqPtLService', true],
            'App\\Controller\\FraisforfaitController::show' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\EtatController:delete' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\EtatController:edit' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\EtatController:index' => ['privates', '.service_locator.GInIfSI', 'get_ServiceLocator_GInIfSIService', true],
            'App\\Controller\\EtatController:show' => ['privates', '.service_locator.fhZDZ7k', 'get_ServiceLocator_FhZDZ7kService', true],
            'App\\Controller\\FraisforfaitController:delete' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'App\\Controller\\FraisforfaitController:edit' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'App\\Controller\\FraisforfaitController:index' => ['privates', '.service_locator.RupqPtL', 'get_ServiceLocator_RupqPtLService', true],
            'App\\Controller\\FraisforfaitController:show' => ['privates', '.service_locator.w9jrdkL', 'get_ServiceLocator_W9jrdkLService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\EtatController::delete' => '?',
            'App\\Controller\\EtatController::edit' => '?',
            'App\\Controller\\EtatController::index' => '?',
            'App\\Controller\\EtatController::show' => '?',
            'App\\Controller\\FraisforfaitController::delete' => '?',
            'App\\Controller\\FraisforfaitController::edit' => '?',
            'App\\Controller\\FraisforfaitController::index' => '?',
            'App\\Controller\\FraisforfaitController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\EtatController:delete' => '?',
            'App\\Controller\\EtatController:edit' => '?',
            'App\\Controller\\EtatController:index' => '?',
            'App\\Controller\\EtatController:show' => '?',
            'App\\Controller\\FraisforfaitController:delete' => '?',
            'App\\Controller\\FraisforfaitController:edit' => '?',
            'App\\Controller\\FraisforfaitController:index' => '?',
            'App\\Controller\\FraisforfaitController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
