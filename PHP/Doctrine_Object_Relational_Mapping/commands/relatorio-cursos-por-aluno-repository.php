<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Repository\AlunoRepository;
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

$alunosRepository = $entityManager->getRepository(Aluno::class);

$alunoList = $alunosRepository->buscarCursosPorAluno();                     // É normal que não seja compreendido a função, pois estamos dizendo à entidade Aluno
                                                                            //  que a forma de pesquisar seu repositório é por meio da classe AlunoRepository

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