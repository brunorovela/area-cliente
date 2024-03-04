<?php

use AreaCliente\Controller\LoginController;
use Laminas\Router\Http\Literal;

return [

    'type' => Literal::class,
    'options' => [
        'route' => '/login',
        'defaults' => [
            'controller' => LoginController::class,
            'action' => 'index',
        ],
    ],

    'may_terminate' => true,

    'child_routes' => [
    ]
];
