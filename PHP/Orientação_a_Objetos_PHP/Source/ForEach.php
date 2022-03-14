<?php



$conta1 = 

$conta2 = 

$conta3 = 

$ContasCorrentes = [
    [
        'nome' => 'Vinicius',
        'saldo' => 1000
    ],
    [
        'nome' => 'Maria',
        'saldo' => 10000
    ],
    [
        'nome' => 'Roberto',
        'saldo' => 300
    ]
];


$ContasCorrentes['Testando'] = [
    'nome' => 'João',
    'saldo' => 3400
];

foreach($ContasCorrentes as $cpf => $conta) {
    echo $cpf . '   '. $conta['nome'] . PHP_EOL;
}



?>