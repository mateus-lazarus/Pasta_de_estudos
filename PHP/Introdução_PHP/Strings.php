<?php

$idade = 21;

$texto = 'Hello world! I am ' . $idade . ' years old.';     // com ASPAS ÚNICAS é necessário concatenar strings

$texto2 = "Hello world! I am $idade years old.";     // com ASPAS DUPLAS NÃO É NECESSÁRIO concatenar strings

echo $texto;
echo PHP_EOL;    // somente ASPAS DUPLAS sabem LER CARACTERES ESPECIAIS
echo $texto2;































