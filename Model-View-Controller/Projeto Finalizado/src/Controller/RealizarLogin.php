<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Usuario;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Alura\Cursos\Infra\EntityManagerCreator;


class RealizarLogin implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;


    private $repositorioDeUsuarios;


    public function __construct()
    {
        $entityManager = (new EntityManagerCreator)->getEntityManager();
        $this->repositorioDeUsuarios = $entityManager->getRepository(Usuario::class);
    }


    public function processaRequisicao(): void
    {
        $email = filter_input(
            type: INPUT_POST,
            var_name: 'email',
            filter: FILTER_VALIDATE_EMAIL
        );

        if (is_null($email) || $email === false) {
            $_SESSION['tipoMensagem'] = 'danger';
            $_SESSION['mensagem'] = "O email digitado não é um email válido.";
            header('LOCATION: /login');
            return;
        }


        /** @var Usuario $usuario */
        $usuario = $this->repositorioDeUsuarios->findOneBy(["email" => $email]);

        @$senha = filter_input(
            type: INPUT_POST,
            var_name: 'senha',
            filter: FILTER_SANITIZE_STRING
        );


        if (is_null($usuario) || !$usuario->senhaEstaCorreta($senha) ) {
            $_SESSION['tipoMensagem'] = 'danger';
            $_SESSION['mensagem'] = "Email ou senha inválidos.";
            header('LOCATION: /login');
            return;
        }


        $_SESSION['logado'] = true;                 // Passar um dado persistente (chamado de Sessão) para o Html
        $_SESSION['tipoMensagem'] = 'success';
        $_SESSION['mensagem'] = 'Logado com sucesso.';

        header('LOCATION: /listar-cursos');
    }
}