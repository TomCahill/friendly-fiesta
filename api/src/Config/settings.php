<?php

$environment = (object) include(__DIR__.'/.environment.php');

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Database settings
        'db' => [
            'driver' =>'mysql',
            'host'=> $environment->db['localhost'],
            'database'=>$environment->db['database'],
            'username'=>$environment->db['username'],
            'password'=>$environment->db['password'],
            'charset'=>'utf8',
            'prefix'=>'invoice_'
        ],

        // View settings
        'view' => [
            'template_path' => __DIR__ . '/../Views/',
            'cache' => false,
            'debug' => true
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
