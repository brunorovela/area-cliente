<?php
/** @var ServiceManager $container */

use Illuminate\Database\Capsule\Manager;
use Laminas\ServiceManager\ServiceManager;

$arrConfig = $container->get('config')['db'] ?? [];
$capsule = new Manager();

$capsule->addConnection([
    'driver'    => $arrConfig['driver'] ?? '',
    'host'      => $arrConfig['hostname'] ?? '',
    'database'  => $arrConfig['database'] ?? '',
    'username'  => $arrConfig['username'] ?? '',
    'password'  => $arrConfig['password'] ?? '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Habilitar Eloquent
$capsule->setAsGlobal();
$capsule->bootEloquent();

