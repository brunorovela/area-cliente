<?php

namespace AreaCliente\Service\Factory;

use AreaCliente\Repository\UsuarioRepository;
use AreaCliente\Service\UsuarioService;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;

class UsuarioServiceFactory implements FactoryInterface {

    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $objUsuarioRepository = $container->get(UsuarioRepository::class);

        return new UsuarioService($objUsuarioRepository);
    }
}