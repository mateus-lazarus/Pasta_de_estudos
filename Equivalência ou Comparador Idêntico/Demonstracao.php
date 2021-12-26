<?php

function validaEmail($email) { 
    $posicao = strpos($email, '@');

    if($posicao === 0) {  echo PHP_EOL . '0 ativado'; /* exibe uma menssagem de erro dizendo que faltou a conta// } */}
        echo $posicao;

    if($posicao === false) { echo PHP_EOL . 'false ativado';/* exibe uma menssagem de erro dizendo que aquele campo é especifico para email// */}
    
    else {echo PHP_EOL . 'Else ativado';}
}

$email1 = '';

validaEmail($email1);

// Há erro no uso de == pois 0 possui equivalência para FALSE, assim ambos IF são ativados.
//  para que funcione devemos utilizar na função o OPERADOR IDÊNTICO ===


function validaEmail2($email) { 
    $posicao = strpos($email, '1');

    if($posicao === false) {  echo PHP_EOL . '0 ativado'; //exibe uma menssagem de erro dizendo que faltou a conta// } 
        if($posicao === false) { echo PHP_EOL . 'Null ativado';//exibe uma menssagem de erro dizendo que aquele campo é especifico para email// 
        }
    }
    else {echo PHP_EOL . 'Else ativado';}
    return $posicao;
}


//validaEmail2($email1);

