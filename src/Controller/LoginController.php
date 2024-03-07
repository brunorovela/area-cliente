<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class LoginController extends AbstractViewController
{
    public function index(Request $request, Response $response, $args) {
        return $this->view->render($response, 'login.twig', $args);
    }
}