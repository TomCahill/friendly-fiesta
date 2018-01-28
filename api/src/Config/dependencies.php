<?php
// DIC configuration

$container = $app->getContainer();

// view
$container['view'] = function($c){
    $settings = $c->get('settings')['view'];
    $view = new Slim\Views\Twig($settings['template_path'], $settings);
    $view->addExtension(new \Slim\Views\TwigExtension($c->router, $c->request->getUri()));
    // ----- Set view globals here -----
    return $view;
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// database
$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container->get('settings')['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function($c) use ($capsule){
    return $capsule;
};

$container['PageController'] = function($c){
    return new Invoice\Controllers\PageController(
        $c
    );
};
