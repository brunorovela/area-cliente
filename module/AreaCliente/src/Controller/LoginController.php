<?php

declare(strict_types=1);

namespace AreaCliente\Controller;

use AreaCliente\Service\UsuarioService;
use Laminas\View\Model\ViewModel;

class LoginController extends AbstractAreaClienteController
{
    public function indexAction()
    {
        $objUsuarioService = $this->getServiceManager(UsuarioService::class);
        $objUsuario = $objUsuarioService->encontrarUsuarioPorLogin('rovela');
dump($objUsuario);die;
        return new ViewModel();
    }
}
