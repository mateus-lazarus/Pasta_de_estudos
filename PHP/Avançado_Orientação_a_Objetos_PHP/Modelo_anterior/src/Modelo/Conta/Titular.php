<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\CPF;     // Assim o PHP já sabe onde procurar as classes usadas
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;

//Titular É UMA pessoa
class Titular extends Pessoa implements Autenticavel
{
    protected CPF $cpf;
    protected string $nome;
    private Endereco $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);   // Assim podemos deixar PRIVADO as variáveis na classe pai. É o recomendado.
        $this->endereco = $endereco;
    }


    public function recuperaEndereco(Endereco $endereco): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha == 'abcd';
    }
}
