<?php

function exibir($mensagem) {
    echo $mensagem . PHP_EOL;
}


require 'validarCPF.php';

class CPF
{
    private string $cpf;

    public function __construct($cpf)
    {
        if (validarCPF($cpf) == false)
        {
            return;
        }

        $this->cpf = $cpf;
    }
}

class Titular
{
    private CPF $cpf;
    private string $nome;


    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = new CPF($cpf);
        $this->validarNomeTitular($nome);
    }

    private function validarNomeTitular(string $nome) : void {
        if (strlen($nome) < 5 ) {
            exibir("Nome precisa ter ao menos 5 caracteres.");
            return;
        }
        
        $this->nome = $nome;
    }

    

    private function validarCpfTitular(string $cpf) : void {
        if (strlen($cpf) < 14 ) {
            exibir("CPF precisa ter ao menos 14 caracteres.");
            return;
        }
        
        $this->cpf = $cpf;
    }

}

class Conta
{

    private Titular $titular;
    private float $saldo = 0;
    public static int $numeroDeContas = 0;


    public function __construct(Titular $titular) {
        exibir("Criando nova conta");

        $this->Titular = $titular;
        $this->saldo = 0;


        self::$numeroDeContas++;
        echo self::$numeroDeContas . PHP_EOL;
    }


    public function __destruct()
    {
        self::$numeroDeContas--;
        echo 'Utilizando destrutor ' . self::$numeroDeContas . PHP_EOL;
    }


    public function sacarDinheiro (float $sacarValor) : void {
        if ($sacarValor > $this->saldo) {
            exibir("Saldo indisponível.");
            return;
        }

        $this->saldo -= $sacarValor;
        exibir("Sacado com sucesso. R$ $sacarValor");
        exibir("Novo saldo : R$ $this->saldo");
    }


    public function depositarDinheiro (float $depositarValor) : void {
        if ($depositarValor < 0) {
            exibir("Esse é um valor negativo. Só são permitidos valores positivos.");
            return;
        }

        $this->saldo += $depositarValor;
        exibir("Depositado com sucesso o valor de : R$ $depositarValor");
        exibir("Novo saldo : R$ $this->saldo");
    }


    public function mostrarContagem() : int {
        return $this->numeroDeContas;
    }
}

$vinicius = new Titular('123.456.789-10', 'Vinicius Dias');
$novaUm = new Conta($vinicius);
$maria = new Titular('529.982.247-25', 'Maria Antonia');
$novaDois = new Conta($maria);

// new Conta( new Titular('111.111.111-11', 'Maria Antonia') );

var_dump($novaDois);




















?>