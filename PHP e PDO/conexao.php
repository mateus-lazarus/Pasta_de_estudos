<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';
$PDO = new PDO(dsn: 'sqlite:' . $caminhoBanco);      //

echo 'Successful Connection.';


$PDO->exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');

?>