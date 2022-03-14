<?php

function exibir($mensagem) {
    echo $mensagem . PHP_EOL;
}

class Conta
{

    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;
    public static int $numeroDeContas = 0;


    public function __construct(string $cpfTitular, string $nomeTitular) {
        exibir("Criando nova conta");
        $this->validarCpfTitular($cpfTitular);
        $this->validarNomeTitular($nomeTitular);
        $this->saldo = 0;


        self::$numeroDeContas++;
        echo self::$numeroDeContas . PHP_EOL;
    }


    public function __destruct()        // uma função de GARBAGE COLLECTOR para limpar a memória de informações que não mais possuem referência. Tem imagem na pasta.
                                        // é chamada automaticamente e a maioria das linguagens o possuem.
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


    private function validarNomeTitular(string $nomeTitular) : void {
        if (strlen($nomeTitular) < 5 ) {
            exibir("Nome precisa ter ao menos 5 caracteres.");
            exit();
        }
        
        $this->cpfTitular = $nomeTitular;
    }


    private function validarCpfTitular(string $cpfTitular) : void {
        if (strlen($cpfTitular) < 14 ) {
            exibir("CPF precisa ter ao menos 14 caracteres.");
            exit();
        }
        
        $this->cpfTitular = $cpfTitular;
    }


    public function mostrarContagem() : int {
        return $this->numeroDeContas;
    }
}


$novaUm = new Conta('123.456.789-10', nomeTitular:'Vinicius Dias');
$novaDois = new Conta(cpfTitular:'123.456.789-12', nomeTitular:'Maria Antonia');

new Conta(cpfTitular:'123.456.789-12', nomeTitular:'Maria Antonia');






















?>