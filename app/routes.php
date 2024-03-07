<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use App\Controller\HomeController;
use App\Controller\LoginController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    // Controllers (Telas)
    $app->group('', function (Group $group) {
        $group->get('/', HomeController::class . ':index')->setName('home');
        $group->get('/login', LoginController::class . ':index')->setName('login');
    });

    $app->group('/api', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};

/*
 * return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->group('/', function (Group $group) {

        $group->get('', function (Request $request, Response $response) {
            $view = Twig::fromRequest($request);

            return $view->render(
                $response,
                'site/index.twig',
                [
                    'name' => 'Bruno Aurélio Rovela'
                ]
            );
        });
    });

    $app->group('/admifo', function (Group $group) {

        $group->get('', function (Request $request, Response $response) {
            $view = Twig::fromRequest($request);

            return $view->render(
                $response,
                'admifo/index.twig',
                [
                    'name' => 'Bruno Aurélio Rovela'
                ]
            );
        });

        $group->get('/login', function (Request $request, Response $response) {
            $view = Twig::fromRequest($request);

            return $view->render(
                $response,
                'admifo/login.twig',
                [
                    'name' => 'Bruno Aurélio Rovela'
                ]
            );
        });
    });

    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
 */