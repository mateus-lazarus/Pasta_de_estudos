<?php

include 'functions.php';

$ContasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],

    '123.456.789-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],

    '123.456.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ],
];


$ContasCorrentes['123.456.789-10']['saldo'] -= 500;

foreach ($ContasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf   {$conta['titular']}   {$conta['saldo']}");
};










?>