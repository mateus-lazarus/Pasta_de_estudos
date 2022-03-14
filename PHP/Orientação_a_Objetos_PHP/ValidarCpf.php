<?php

// Arquivo separado para fazer um algoritmo de validação de CPF

function validarCPF(string $cpf) : bool
{
    // cpf já conhecidos como falsos
    $listaCpfInvalido = ['111.111.111-11', '222.222.222-22', '333.333.333-33', '444.444.444-44', '555.555.555-55', '666.666.666-66', '777.777.777-77', '888.888.888-88', '999.999.999-99'];

    if (strlen($cpf) == 14)
    {

        if (in_array($cpf, $listaCpfInvalido))
        {
            echo 'CPF inválido já conhecido.' . PHP_EOL;
            return false;
        }

        /*
            É pressuposto que já existe uma formatação no formulário para que apenas se possa digitar números inteiros e dentro do formato ###.###.###-##
        */

        $digitoUm = substr($cpf, 1, 0);
        $digitoDois = substr($cpf, 1, 1);
        $digitoTres = substr($cpf, 1, 2);
        $digitoQuatro = substr($cpf, 1, 4);
        $digitoCinco = substr($cpf, 1, 5);
        $digitoSeis = substr($cpf, 1, 6);
        $digitoSete = substr($cpf, 1, 8);
        $digitoOito = substr($cpf, 1, 9);
        $digitoNove =substr($cpf, 1, 10);
        $digitoDez = substr($cpf, 1, 12);
        $digitoOnze = substr($cpf, 1, 13);

        $digitosDoCpf = [$digitoUm, $digitoDois, $digitoTres, $digitoQuatro, $digitoCinco, $digitoSeis, $digitoSete, $digitoOito, $digitoNove, $digitoDez, $digitoOnze];

        
        if(primeiraValidacao($digitosDoCpf) and segundaValidacao($digitosDoCpf) )
        {
            return true;
        }

        return false;
    }
}



function primeiraValidacao(array $digitosDoCpf) : bool
{
    $somaTotal = 0;

    foreach($digitosDoCpf as $numero => $digito)
    {
        if ($digitosDoCpf[10] == $digito or $digitosDoCpf[9] == $digito)
        {
            continue;
        }

        $somaTotal += intval($digito) * (10 - $numero);
    }


    $somaTotal = $somaTotal * 10;
    
    if ($somaTotal % 11 == $digitosDoCpf[9])
    {
        return true;
    }

    echo 'Falhou na primeira validação.' . PHP_EOL;
    return false;
}


function segundaValidacao(array $digitosDoCpf) : bool
{
    $somaTotal = 0;

    foreach($digitosDoCpf as $numero => $digito)
    {
        if ($digitosDoCpf[10] == $digito)
        {
            continue;
        }

        $somaTotal += intval($digito) * (11 - $numero);
    }


    $somaTotal = $somaTotal * 10;
    
    if ($somaTotal % 11 == $digitosDoCpf[10])
    {
        return true;
    }

    echo 'Falhou na segunda verificação' . PHP_EOL;
    return false;
}














?>