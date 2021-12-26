<?php

$frase = 'Testes de integração com PHP';

echo mb_strlen($frase) . PHP_EOL;  /* strlen() é uma função que conta caracteres */

echo mb_strtoupper($frase); /* essa extensão MULTIBYTE STRING lida com TODO tipo de string, por isso é interessante que ela seja um padrão*/

/* Documentação oficial : https://www.php.net/manual/pt_BR/book.mbstring.php */

?>