<?php

use Alura\Pdo\Infrastructure\Persistence\ConectionCreator;

require_once 'vendor/autoload.php';

$PDO = $PDO = ConectionCreator::createConnection();
echo 'Successful Connection.' . PHP_EOL;


$sqlDelete = 'DELETE FROM students WHERE id = ?;';

$preparedStatement = $PDO->prepare($sqlDelete);
$preparedStatement->bindValue(1, 4, PDO::PARAM_INT);
var_dump($preparedStatement->execute());

$preparedStatement->bindValue(1, 5, PDO::PARAM_INT);
var_dump($preparedStatement->execute());
