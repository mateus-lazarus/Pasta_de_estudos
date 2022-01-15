<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $Autenticavel, string $senha): void
    {
        if ($Autenticavel->podeAutenticar($senha) ) {
            echo 'Ok. Usuário logado no sistema.' . PHP_EOL;
        } else {
            echo 'Senha incorreta' . PHP_EOL;
        }
    }
}