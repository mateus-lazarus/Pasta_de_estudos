<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;     // Assim o PHP já sabe onde procurar as classes usadas
use Alura\Banco\Modelo\CPF;

// Funcionário É UMA pessoa
abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);   // Assim podemos deixar PRIVADO as variáveis na classe pai. É o recomendado.
        $this->salario = $salario;
    }


    // O funcionário pode alterar o próprio nome
    public function alteraNome(string $novoNome) : void
    {
        parent::validaNome($novoNome);
        $this->nome = $novoNome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0)
        {
            echo 'Valor tem que ser positivo.' . PHP_EOL;
            return;
        }

        $this->salario += $valorAumento;
    }

    abstract public function calculaBonificacao(): float;
}
