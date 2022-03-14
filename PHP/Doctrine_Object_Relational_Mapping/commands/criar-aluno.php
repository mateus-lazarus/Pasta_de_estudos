<?php

use Alura\Doctrine\Entity\Aluno;
use Alura\Doctrine\Entity\Telefone;
use Alura\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();


$aluno1 = new Aluno();
$aluno1->setNome($argv[1]);


for ($i = 2; $i < $argc; $i++) {
    $numeroTelefone = $argv[$i];
    
    $telefone = new Telefone();
    $telefone->setNumero($numeroTelefone);
    
    $aluno1->addTelefone($telefone);
}


$entityManager->persist($aluno1);

$entityManager->flush();

?>