<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


$classeAluno = Aluno::class;
$dql = "SELECT COUNT(a) FROM $classeAluno a";    // o "a" é uma forma de denominar mais facilmente a lista de Alunos
$query = $entityManager->createQuery($dql);

//$total = $query->getScalarResult();                 // "getScalarResult" retorna dados que não são do tipo Aluno, mas em forma de ARRAY

$total = $query->getSingleScalarResult();                 // "getSingleScalarResult" retorna dados que não são do tipo Aluno e diretamente

echo "Total de alunos : " . $total;










