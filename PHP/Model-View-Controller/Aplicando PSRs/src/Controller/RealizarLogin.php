<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Helper\FlashMessageTrait;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class RealizarLogin implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;
    use FlashMessageTrait;


    private $repositorioDeUsuarios;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeUsuarios = $entityManager->getRepository(Usuario::class);
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $email = filter_var($request->getParsedBody()['email'], FILTER_VALIDATE_EMAIL);

        if (is_null($email) || $email === false) {
            $this->defineMensagem('danger', 'O email digitado não é um email válido.');

            return new Response(
                status: 302,
                headers: [
                    'Location' => '/login'
                ]
            );
        }


        /** @var Usuario $usuario */
        $usuario = $this->repositorioDeUsuarios->findOneBy(["email" => $email]);

        $senha = filter_var($request->getParsedBody()['senha'], FILTER_SANITIZE_STRING);

        var_dump($senha);
        var_dump($email);

        if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha) ) {
            $this->defineMensagem('danger', 'Email ou senha inválidos.');

            return new Response(
                status: 302,
                headers: [
                    'Location' => '/login'
                ]
            );
        }


        $_SESSION['logado'] = true;                 // Passar um dado persistente (chamado de Sessão) para o Html
        $this->defineMensagem('success', 'Logado com sucesso.');


        return new Response(
            status: 302,
            headers: [
                'Location' => '/listar-cursos'
            ]
        );
    }

}
