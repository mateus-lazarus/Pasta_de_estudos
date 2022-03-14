<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;


class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao() : float
    {
        return 2 * $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha) : bool
    {
        return $senha === '1234';
    }
}