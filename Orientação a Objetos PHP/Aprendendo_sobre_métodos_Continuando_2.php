<?php

/*



Para embasar melhor o conceito novo utilizado de EARLY RETURN

https://dorianneto.com.br/boas-praticas/torne-se-um-ninja-das-funcoes-com-early-return/

https://youtu.be/u-w4eULRrr0?t=904



*/

class Conta
{

    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo = 0;

    public function sacarDinheiro (float $sacarValor) : void
    {
        if ($sacarValor > $this->saldo)     
        {
            echo 'Saldo indisponível.' . PHP_EOL;
            return; // saí da função e é VOID (vazio)
        }

        // algumas vezes prefira EVITAR ELSE, uma boa prática é utilizar * return; * pois já é dito que o valor retornado é vazio (VOID)
        /*
        else {$this->saldo -= $sacarValor;   echo "Sacado com sucesso. R$ $sacarValor" . PHP_EOL;    echo "Novo saldo : R$ $this->saldo" . PHP_EOL;}
        */

        // aplicando o método
        $this->saldo -= $sacarValor;
        echo "Sacado com sucesso. R$ $sacarValor" . PHP_EOL;
        echo "Novo saldo : R$ $this->saldo" . PHP_EOL;
    }


    public function depositarDinheiro (float $depositarValor) : void
    {
        if ($depositarValor < 0)
        {
            echo 'Esse é um valor negativo. Só são permitidos valores positivos.' . PHP_EOL;
            return;
        }

        $this->saldo += $depositarValor;
        echo "Depositado com sucesso o valor de : R$ $depositarValor" . PHP_EOL;
        echo "Novo saldo : R$ $this->saldo" . PHP_EOL;
    }

    public function transferirDinheiro (float $valorATransferir, Conta $contaDestino) : void
    {
        if ($valorATransferir > $this->saldo)
        {
            echo 'Valor indisponível' . PHP_EOL;
            return;
        }

            $this->sacarDinheiro($valorATransferir);
            $contaDestino->depositarDinheiro($valorATransferir);
            echo 'Transferência obteve sucesso.' . PHP_EOL;
    }

}


$contaUm = new Conta;
$contaUm->saldo = 2000;
$contaUm->cpfTitular = '123.456.789-10';
$contaUm->nomeTitular = 'Vinicius Dias';

$contaDois = new Conta;
$contaDois->saldo = 2000;
$contaDois->cpfTitular = '123.456.789-12';
$contaDois->nomeTitular = 'Vitoria Souza';


$contaUm->transferirDinheiro(500, $contaDois);

var_dump($contaUm);
var_dump($contaDois);























