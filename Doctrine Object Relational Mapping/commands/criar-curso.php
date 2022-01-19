<?php

use Alura\Doctrine\Entity\Curso;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


$curso1 = new Curso();
$curso1->setNome($argv[1]);

$entityManager->persist($curso1);

$entityManager->flush();






?>