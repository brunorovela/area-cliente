<?php

declare(strict_types=1);

namespace AreaCliente\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractAreaClienteController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
