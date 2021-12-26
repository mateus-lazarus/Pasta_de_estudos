<?php

/*



Há uma prática de bons métodos que

- VARIÁVEIS SÃO SUBSTANTIVOS
- FUNÇÕES SÃO VERBOS

E fica a critério do programador decidir se os verbos serão em INFINITIVO OU IMPERATIVO


GETTERS e SETTERS são métodos da orientação a objetos

GETTERS : pegam informação desses atributos

SETTERS : definem valores a esses atributos

https://blog.caelum.com.br/nao-aprender-oo-getters-e-setters/

*/

class Conta
{
    /* Para proteger de ACESSO DIRETO ao valores da classe, é possível que se deixe PRIVATE toda variável para que SOMENTE as funções dentro da classe
        as possam acessar

        NOTA : agora até mesmo a visualização é impedida e não se é possível utilizar * $contaUm->saldo *
    */

    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo = 0;

    public function sacarDinheiro (float $sacarValor) : void
    {
        if ($sacarValor > $this->saldo)     
        {
            echo 'Saldo indisponível.' . PHP_EOL;
            return;
        }

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


}




















