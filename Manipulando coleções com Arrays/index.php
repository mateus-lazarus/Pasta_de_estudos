<?php

namespace Estudos;

require_once 'C:\Users\Pichau\Desktop\Aulas Alura\PHP\Estudos_em_Php\Manipulando coleções com Arrays\autoloader.php';


$array = ['Mateus', 'João', 'Guilherme', 12, 'Cristóvão', '12', 'Geraldo'];

echo '<pre>';

var_dump($array);

removeElemento::removerElemento(12, $array);

var_dump($array);

?>