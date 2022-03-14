<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;

require_once __DIR__ . '/../vendor/autoload.php';


$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunoList */
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    $telefones = $aluno
        ->getTelefones()
        ->map(function (Telefone $telefone){
            return $telefone->getNumero();
        })
        ->toArray();

    echo "ID: {$aluno->getId()}\nNome: {$aluno->getNome()}\n";
    echo "Telefones: " . implode(', ', $telefones) . "\n\n";
}


// Modelos de pesquisar de FIND
// $Mateus = $alunoRepository->find(id: 4);
// echo "\n\n{$Mateus->getNome()}, id : {$Mateus->getId()}\n\n";


// $Mateus = $alunoRepository->findBy([
//         'nome' => 'Mateus'
//     ]);

// var_dump($Mateus);   // Retorna array


// $joaoRoberto = $alunoRepository->findOneBy([    // Retorna Objeto
//     'nome' => 'João Roberto Grego'
// ]);

// echo "\n\n";
// var_dump($joaoRoberto);

?>