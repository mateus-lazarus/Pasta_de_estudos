<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Doctrine\DBAL\Logging\DebugStack;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$alunosRepository = $entityManager->getRepository(Aluno::class);

// ........................................................................... 

// $entityManager->getConnection()->getConfiguration()->setSQLLogger(new DebugStack());

// $sqlLogger = $entityManager->getConfiguration()->getSQLLogger();

$sqlLogger = new DebugStack();
$entityManager->getConfiguration()->setSQLLogger($sqlLogger);

// ........................................................................... 


// /** @var Aluno[] $alunos */
// $alunoList = $alunosRepository->findAll();

$classeAluno = Aluno::class;
$dql = "SELECT aluno, telefones, cursos FROM $classeAluno aluno JOIN aluno.telefones telefones JOIN aluno.cursos cursos";
$query = $entityManager->createQuery($dql);

$alunoList = $query->getResult();

foreach ($alunoList as $aluno) {
    $telefones = $aluno
        ->getTelefones()
        ->map(
            function (Telefone $telefone) {
                return $telefone->getNumero();
            })
        ->toArray();

        
    echo "ID : {$aluno->getId()}\nNome : {$aluno->getNome()}\n";
    echo "Telefones : " . implode(', ', $telefones) . "\n";
        
        
    $cursos = $aluno->getCursos();

    foreach ($cursos as $curso) {
        echo "ID do Curso : {$curso->getId()}\t\tNome do Curso : {$curso->getNome()}";
        echo "\n";
    }

    echo "\n\n";
}


// var_dump($sqlLogger);

echo "\n\n";
foreach ($sqlLogger->queries as $queryInfo) {
    echo $queryInfo['sql'] . "\n\n";
}