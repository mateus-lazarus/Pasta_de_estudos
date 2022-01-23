<?php

use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\InterfaceControladorRequisicao;
use Alura\Cursos\Controller\ListarCursos;
use Alura\Cursos\Controller\Persistencia;

require __DIR__ . '/../vendor/autoload.php';


$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';


if (!array_key_exists($caminho, $rotas) ) {
    // header(header: '', replace: false, response_code: 404);          A opção mais esdruxúla
    http_response_code(404);                                            // Opção mais fofa por meio do chrome mesmo
    exit();
}

$classeControladora = $rotas[$caminho];
/** @var InterfaceControladoraRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();
