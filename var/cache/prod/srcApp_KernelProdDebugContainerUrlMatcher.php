<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(array(array('_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'), null, null, null, false, null)),
            '/admin' => array(array(array('_route' => 'admin', '_controller' => 'App\\Controller\\DefaultController::admin'), null, null, null, false, null)),
            '/admin/dashboard' => array(array(array('_route' => 'dashboard', '_controller' => 'App\\Controller\\DefaultController::dashboard'), null, null, null, false, null)),
            '/admin/relatorios' => array(array(array('_route' => 'relatorios', '_controller' => 'App\\Controller\\DefaultController::relatorios'), null, null, null, false, null)),
            '/admin/login' => array(array(array('_route' => 'login', '_controller' => 'App\\Controller\\DefaultController::login'), null, null, null, false, null)),
            '/insert' => array(array(array('_route' => 'app_default_insert', '_controller' => 'App\\Controller\\DefaultController::insert'), null, null, null, false, null)),
            '/logout' => array(array(array('_route' => 'logout'), null, null, null, false, null)),
        );
    }
}
