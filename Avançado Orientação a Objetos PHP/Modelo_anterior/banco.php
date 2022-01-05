<?php

require_once 'autoload.php';


/*
use Alura\Banco\Modelo\Endereco;     // Assim o PHP já sabe onde procurar as classes usadas
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
*/

// E temos o modo SUPER SAYAJIN com o uso de COLCHETES {}
use Alura\Banco\Modelo\{Endereco, CPF, Conta\Conta, Conta\ContaPoupanca, Conta\ContaCorrente, Conta\Titular};

$endereco = new Endereco('Petropolis', 'um bairro', 'minha rua', '71B');

$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);


$outroEndereco = new Endereco('A', 'B', 'C', '1D');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
