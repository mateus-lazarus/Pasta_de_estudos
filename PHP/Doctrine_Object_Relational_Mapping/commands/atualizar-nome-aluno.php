<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;

require_once __DIR__ . '/../vendor/autoload.php';


$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$id = $argv[1];
$novoNome = $argv[2];

echo "ID : $id\t\tNovo nome : $novoNome\n\n";

$alunoRepository = $entityManager->getRepository(Aluno::class);

$aluno = $alunoRepository->find($id);
$aluno->setNome($novoNome);

$entityManager->flush();
