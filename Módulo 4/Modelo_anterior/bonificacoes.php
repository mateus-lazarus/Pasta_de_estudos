<?php

require_once 'autoload.php';
require_once 'src\Servico\Bonificacoes.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};
use Alura\Banco\Servico\ControladorDeBonificacoes;

$umFuncionario = new Desenvolvedor(
    'Vinicius Dias',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();


$umaFuncionaria = new Gerente(
    'Patricia Dias',
    new CPF('789.456.123-10'),
    3000
);


$umDiretor = new Diretor(
    'Ana Magalhaes',
    new CPF('348.284.079-23'),
    5000
);


$umEditor = new EditorVideo(
    'Roberto Fernandes',
    new CPF('384.254.968-34'),
    1500
);


$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();








