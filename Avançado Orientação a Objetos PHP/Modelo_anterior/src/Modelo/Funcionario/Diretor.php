<?php

namespace Alura\Banco\Modelo\Funcionario;



class Diretor extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 2 * $this->recuperaSalario();
    }

    public function podeAutenticar(string $senha) : bool
    {
        return $senha === '1234';
    }
}