<?php

use AreaCliente\Controller\IndexController;
use Laminas\Router\Http\Literal;

return [

    'type' => Literal::class,
    'options' => [
        'route' => '/',
        'defaults' => [
            'controller' => IndexController::class,
            'action' => 'index',
        ],
    ],

    'may_terminate' => true,

    'child_routes' => [
    ]
];
