<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Slim\Views\Twig;

abstract class AbstractViewController
{
    protected Twig $view;

    public function __construct(Twig $view) {
        $this->view = $view;
    }

    protected function render(
        ResponseInterface $response,
        string $template,
        array $data = []
    ) : ResponseInterface {
        return $this->view->render($response, $template, $data);
    }

}