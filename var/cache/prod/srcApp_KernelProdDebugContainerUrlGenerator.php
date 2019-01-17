<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelProdDebugContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'default' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::index'), array(), array(array('text', '/')), array(), array()),
        'admin' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::admin'), array(), array(array('text', '/admin')), array(), array()),
        'dashboard' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::dashboard'), array(), array(array('text', '/admin/dashboard')), array(), array()),
        'relatorios' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::relatorios'), array(), array(array('text', '/admin/relatorios')), array(), array()),
        'login' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::login'), array(), array(array('text', '/admin/login')), array(), array()),
        'app_default_insert' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::insert'), array(), array(array('text', '/insert')), array(), array()),
        'logout' => array(array(), array(), array(), array(array('text', '/logout')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && null !== $name) {
            do {
                if ((self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
                    unset($parameters['_locale']);
                    $name .= '.'.$locale;
                    break;
                }
            } while (false !== $locale = strstr($locale, '_', true));
        }

        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
