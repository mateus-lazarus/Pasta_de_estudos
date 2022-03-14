<?php


use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$PDO = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($PDO);
$studentList = $repository->allStudents();

var_dump($studentList);



