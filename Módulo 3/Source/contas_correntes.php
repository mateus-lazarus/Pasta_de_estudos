<?php



$conta1 = [
    'nome' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'nome' => 'Maria',
    'saldo' => 10000
];

$conta3 = [
    'nome' => 'Roberto',
    'saldo' => 300
];

$ContasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($ContasCorrentes); ++$i){
    echo $ContasCorrentes[$i]['nome'] . PHP_EOL;
}




?>