<?php

declare(strict_types=1);

namespace AreaCliente\Controller;

use Laminas\Mvc\Controller\AbstractActionController;

class AbstractAreaClienteController extends AbstractActionController
{
    protected function getServiceManager(string $ds_class_service)
    {
        return $this->getEvent()->getApplication()->getServiceManager()->get($ds_class_service);
    }
}
