<?php

class Conta // Criar classes sempre com LETRA MAIÚSCULA
{
    // Existem dois tipos de objetos (instâncias) numa classe. Os PRIVATE ou PUBLIC
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
}


$novaConta = new Conta;     // new cria novos objetos a partir de uma classe

// Para acessar atributos de um objeto é utilizado *  ->  *
// Não se usa $ ao falar de determinado atributo, apenas o escreve ipsis literis

$novaConta->saldo = 200;

$novaConta->cpfTitular = '123.456.789-10';

$novaConta->nomeTitular = 'Vinicius Dias';

var_dump($novaConta);























