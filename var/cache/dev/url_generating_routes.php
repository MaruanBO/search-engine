<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_crawler' => [[], ['_controller' => 'App\\Controller\\Crawler\\WebCrawlerController::index'], [], [['text', '/crawler']], [], [], []],
    'app_crawler_parser' => [[], ['_controller' => 'App\\Controller\\Crawler\\WebCrawlerController::parser'], [], [['text', '/crawler/parser']], [], [], []],
    'app_document' => [[], ['_controller' => 'App\\Controller\\Document\\DocumentController::index'], [], [['text', '/document']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\IndexController::index'], [], [['text', '/']], [], [], []],
    'search' => [[], ['_controller' => 'App\\Controller\\IndexController::doSearch'], [], [['text', '/search']], [], [], []],
];
