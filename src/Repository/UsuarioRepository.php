<?php

namespace App\Repository;

use AreaCliente\Model\Usuario;

class UsuarioRepository
{
    public function findByLogin(string $login = '')
    {
        if (empty($login)) {
            return null;
        }

        return Usuario::where('login', $login)->first();
    }
}