<?php

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Servico\Autenticador;

require_once 'autoload.php';


$autenticador = new Autenticador();

$umDiretor = new Diretor(
    'Vinicius José',
    new CPF('123.456.789-10'),
    5500
);


$autenticador->tentaLogin($umDiretor, '1234');

?>