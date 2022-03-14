<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900
);

unset($contasCorrentes['123.456.689-11']);

titularComLetrasMaisculas($contasCorrentes['123.256.789-12']);

/*
foreach ($contasCorrentes as $cpf => $conta) {
    exibeConta($conta);
}
*/

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Contas e Saldos</title>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><strong><?= $conta['titular']; ?></strong> - - <em><?= $cpf ?></em></h3>
            </dt>
            <dd>
                Saldo : R$ <?= $conta['saldo'] ?>,00
            </dd>
            <?php } ?>
    </dl>
</body>
</html>



