<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\PDO\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';
require_once 'src/Infrastructure/Persistence/ConnectionCreator.php';


$connection = ConnectionCreator::createConnection();

$studentRepository = new PdoStudentRepository($connection);


// realiza a definição da turma



// insere os alunos da turma

try {
    $connection->beginTransaction();

    $aStudent = new Student(
        null,
        'Nicolas Topá',
        new DateTimeImmutable('1998-06-06')
    );

    $studentRepository->saveStudent($aStudent);

    $bStudent = new Student(
        null,
        'Sergio lopes',
        new DateTimeImmutable('1998-06-06')
    );

    $studentRepository->saveStudent($bStudent);
    
    $connection->commit();

}   catch (RuntimeException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}




