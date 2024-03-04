<?php

namespace AreaCliente\Service;

use AreaCliente\Repository\UsuarioRepository;

class UsuarioService
{
    private UsuarioRepository $objUsuarioRepository;

    public function __construct(UsuarioRepository $objUsuarioRepository)
    {
        $this->objUsuarioRepository = $objUsuarioRepository;
    }

    public function encontrarUsuarioPorLogin(string $login = '')
    {
        return $this->objUsuarioRepository->findByLogin($login);
    }
}