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


// // Verifica se o usuário já está logado no nosso site
// $ehRotaDeLogin = stripos($caminho, 'login');                    // Porque temos dois caminhos que são para login. /login e /realiza-login
// if (!isset($_SESSION['logado']) && $ehRotaDeLogin === false ) {
//     header('LOCATION: /login');
//     exit();
// }



// Fabrica de Requisições modelo PSR-7

use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;

$psr17Factory = new Psr17Factory();

$creator = new ServerRequestCreator(
    $psr17Factory, // ServerRequestFactory
    $psr17Factory, // UriFactory
    $psr17Factory, // UploadedFileFactory
    $psr17Factory  // StreamFactory
);

$request = $creator->fromGlobals();

// Fabrica de Requisições modelo PSR-7


use Psr\Http\Server\RequestHandlerInterface;

$classeControladora = $rotas[$caminho];
/** @var RequestHandlerInterface $controlador */
$controlador = new $classeControladora();
$resposta = $controlador->handle($request);


foreach ($resposta->getHeaders() as $name => $values) {
    foreach ($values as $value) {
        header(sprintf('%s: %s', $name, $value), false);
    }
}


echo $resposta->getBody();
