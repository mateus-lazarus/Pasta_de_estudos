<?php

$pdo = new PDO('sqlite:'. __DIR__ . '\var\data\banco.sqlite');
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

var_dump($pdo->exec('SELECT * FROM Aluno;'));











?>