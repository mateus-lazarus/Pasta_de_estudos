<?php

namespace Alura\Banco\Modelo;

class Pessoa
{
    use AcessoPropriedades;

    protected string $nome;
    protected CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }


    final protected function validaNome(string $nome) : void     // Assim o método só poderá ser chamado na classe PAI e nas classes FILHAS
    {
        if (strlen($nome) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }


    public function recuperaNome(): string
    {
        return $this->nome;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }
}
