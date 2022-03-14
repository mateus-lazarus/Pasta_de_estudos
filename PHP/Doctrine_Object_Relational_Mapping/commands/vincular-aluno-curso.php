<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


$idAluno = $argv[1];
$idCurso = $argv[2];

/** @var Curso $curso*/
$curso = $entityManager->getReference(Curso::class, $idCurso);
/** @var Aluno $aluno*/
$aluno = $entityManager->getReference(Aluno::class, $idAluno);

$curso->addAluno($aluno);
// $aluno->addCurso($curso);        // ambos são completos e já se adicionam um ao outro


$entityManager->flush();
