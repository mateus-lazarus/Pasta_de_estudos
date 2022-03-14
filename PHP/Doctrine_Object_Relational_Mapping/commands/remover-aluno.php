<?php

use Alura\Doctrine\Helper\EntityManagerFactory;
use Alura\Doctrine\Entity\Aluno;

require_once __DIR__ . '/../vendor/autoload.php';


$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


$id = $argv[1];
// $aluno = $entityManager->find(Aluno::class, $id);            // Faz com que seja executadas 2 queries dentro do banco de dados
$aluno = $entityManager->getReference(Aluno::class, $id);       // Pega a referência de uma entidade que o Doctrine já gerencia sem executar uma query


$entityManager->remove($aluno);


$entityManager->flush();
