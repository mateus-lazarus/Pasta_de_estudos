<?php

require __DIR__ . '/../vendor/autoload.php';


$caminho = $_SERVER['PATH_INFO'];
$rotas = require __DIR__ . '/../config/routes.php';


if (!array_key_exists($caminho, $rotas) ) {
    // header(header: '', replace: false, response_code: 404);          A opção mais esdruxúla
    http_response_code(404);                                            // Opção mais fofa por meio do chrome mesmo
    exit();
}

session_start();                // Inicializa a Sessão.


// Verifica se o usuário já está logado no nosso site
$ehRotaDeLogin = stripos($caminho, 'login');                    // Porque temos dois caminhos que são para login. /login e /realiza-login
if (!isset($_SESSION['logado']) && $ehRotaDeLogin === false ) {
    header('LOCATION: /login');
    exit();
}


$classeControladora = $rotas[$caminho];
/** @var InterfaceControladoraRequisicao $controlador */
$controlador = new $classeControladora();
$controlador->processaRequisicao();
