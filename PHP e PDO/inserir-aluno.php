<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$PDO = new PDO(dsn: 'sqlite:' . $databasePath);      //

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
