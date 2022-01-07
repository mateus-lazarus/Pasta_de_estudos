<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$PDO = new PDO(dsn: 'sqlite:' . $databasePath);      //

echo 'Successful Connection.' . PHP_EOL;


$sqlDelete = 'DELETE FROM students WHERE id = ?;';

$preparedStatement = $PDO->prepare($sqlDelete);

$preparedStatement->bindValue(1, 4, PDO::PARAM_INT);

var_dump($preparedStatement->execute());

$preparedStatement->bindValue(1, 5, PDO::PARAM_INT);

var_dump($preparedStatement->execute());















