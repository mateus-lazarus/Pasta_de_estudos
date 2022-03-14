<?php

class Conta // Criar classes sempre com LETRA MAIÚSCULA
{
    // Existem dois tipos de objetos (instâncias) numa classe. Os PRIVATE ou PUBLIC
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    // para criar MÉTODOS também se altera dentro da classe

    public function sacarDinheiro (float $sacarValor)     // um MÉTODO para trabalhar com os dados dessa classe
    {
        if ($sacarValor > $this->saldo)     // variável $THIS acessa o próprio endereço. Estamos dizendo que queremos acessar o SALDO do Objeto em que abrimos o método
        {
            echo 'Saldo indisponível.' . PHP_EOL;
        }

        else
        {
            $this->saldo -= $sacarValor;
            echo "Sacado com sucesso. R$ $sacarValor" . PHP_EOL;
            echo "Novo saldo : R$ $this->saldo" . PHP_EOL;
        }
    }
}


$novaConta = new Conta;     // new cria novos objetos a partir de uma classe

// Para acessar atributos de um objeto é utilizado *  ->  *
// Não se usa $ ao falar de determinado atributo, apenas o escreve ipsis literis

$novaConta->saldo = 200;

$novaConta->cpfTitular = '123.456.789-10';

$novaConta->nomeTitular = 'Vinicius Dias';


$novaConta->sacarDinheiro(100);

var_dump($novaConta);























