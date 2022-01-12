<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConectionCreator;

require_once 'vendor/autoload.php';


$PDO = ConectionCreator::createConnection();

echo 'Successful Connection.' . PHP_EOL;


$student = new Student(
    null,
    'Patricia',
    new DateTimeImmutable('1992-8-25')
);


$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";

$statement = $PDO->prepare($sqlInsert);

$name = $student->name();

$statement->bindParam(':name', $name );
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d') );

$statement->execute();
