<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/crawler' => [[['_route' => 'app_crawler', '_controller' => 'App\\Controller\\Crawler\\WebCrawlerController::index'], null, null, null, false, false, null]],
        '/crawler/parser' => [[['_route' => 'app_crawler_parser', '_controller' => 'App\\Controller\\Crawler\\WebCrawlerController::parser'], null, null, null, false, false, null]],
        '/document' => [[['_route' => 'app_document', '_controller' => 'App\\Controller\\Document\\DocumentController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/search' => [[['_route' => 'search', '_controller' => 'App\\Controller\\IndexController::doSearch'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
