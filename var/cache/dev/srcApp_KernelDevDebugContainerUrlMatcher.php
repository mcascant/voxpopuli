<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/' => array(array(array('_route' => 'homepage', '_controller' => 'App\\Controller\\DefaultController::homepage'), null, null, null, false, null)),
            '/post/search' => array(array(array('_route' => 'search_post', '_controller' => 'App\\Controller\\PostController::search'), null, array('GET' => 0, 'OPTIONS' => 1), null, false, null)),
            '/post/create' => array(array(array('_route' => 'create_post', '_controller' => 'App\\Controller\\PostController::createPost'), null, array('POST' => 0), null, false, null)),
            '/post/list' => array(array(array('_route' => 'post_list', '_controller' => 'App\\Controller\\PostController::postList'), null, null, null, false, null)),
            '/_profiler' => array(array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null, true, null)),
            '/_profiler/search' => array(array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null, false, null)),
            '/_profiler/search_bar' => array(array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null, false, null)),
            '/_profiler/phpinfo' => array(array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null, false, null)),
            '/_profiler/open' => array(array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/post/([^/]++)(*:21)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:59)'
                        .'|wdt/([^/]++)(*:78)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:123)'
                                .'|router(*:137)'
                                .'|exception(?'
                                    .'|(*:157)'
                                    .'|\\.css(*:170)'
                                .')'
                            .')'
                            .'|(*:180)'
                        .')'
                    .')'
                .')(?:/?)$}sDu',
        );
        $this->dynamicRoutes = array(
            21 => array(array(array('_route' => 'post_details', '_controller' => 'App\\Controller\\PostController::postDetail'), array('post'), null, null, false, null)),
            59 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, null)),
            78 => array(array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null, false, null)),
            123 => array(array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null, false, null)),
            137 => array(array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null, false, null)),
            157 => array(array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null, false, null)),
            170 => array(array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null, false, null)),
            180 => array(array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null, false, null)),
        );
    }
}
