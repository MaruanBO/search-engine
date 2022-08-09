<?php

namespace ContainerW4TOiVs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebCrawlerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Crawler\WebCrawlerController' shared autowired service.
     *
     * @return \App\Controller\Crawler\WebCrawlerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Crawler/WebCrawlerController.php';

        $container->services['App\\Controller\\Crawler\\WebCrawlerController'] = $instance = new \App\Controller\Crawler\WebCrawlerController((\dirname(__DIR__, 3).'/uploads/crawler'));

        $instance->setContainer(($container->privates['.service_locator.PdRhP5Q'] ?? $container->load('get_ServiceLocator_PdRhP5QService'))->withContext('App\\Controller\\Crawler\\WebCrawlerController', $container));

        return $instance;
    }
}
