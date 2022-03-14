<?php

$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luísa',
    'Rafael'
];


$saldos = [
    'Luis',
    'Rafael'
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);


echo '<pre>';

var_dump($correntistasPagantes);

array_merge

?>