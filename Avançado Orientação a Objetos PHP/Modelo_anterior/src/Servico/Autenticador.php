<?php

namespace Alura\Banco\Servico;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): bool
    {
        if ($diretor->podeAutenticar($senha) ) {
            echo 'Ok. Usuário logado no sistema.' . PHP_EOL;
            return true;
        }
    }
}

























