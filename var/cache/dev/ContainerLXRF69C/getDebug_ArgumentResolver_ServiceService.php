<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.argument_resolver.service' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
include_once $this->targetDirs[3].'/vendor/symfony/http-kernel/Controller/ArgumentResolver/ServiceValueResolver.php';

return $this->privates['debug.argument_resolver.service'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'App\\Controller\\CommentsController::commentsDetail' => array('privates', '.service_locator.oKrcl6Q', 'get_ServiceLocator_OKrcl6QService.php', true),
    'App\\Controller\\PostController::postDetail' => array('privates', '.service_locator.TwhmRPL', 'get_ServiceLocator_TwhmRPLService.php', true),
    'App\\Controller\\CommentsController:commentsDetail' => array('privates', '.service_locator.oKrcl6Q', 'get_ServiceLocator_OKrcl6QService.php', true),
    'App\\Controller\\PostController:postDetail' => array('privates', '.service_locator.TwhmRPL', 'get_ServiceLocator_TwhmRPLService.php', true),
))), ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true))));
