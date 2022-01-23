<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;


class Persistencia extends ControllerComHtml implements InterfaceControladorRequisicao
{
    private $entityManager;


    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator())
        ->getEntityManager();
    }


    public function processaRequisicao(): void
    {
        // Pegar dados do usuário
        $descricao = filter_input(
            type: INPUT_POST,
            var_name: 'descricao',
            filter: FILTER_SANITIZE_STRING
        );

        // Criar modelo Curso
        $curso = new Curso();
        $curso->setDescricao($descricao);

        // Inserir no Banco
        $this->entityManager->persist($curso);
        $this->entityManager->flush();


        // Mensagem de confirmação
        echo "Curso $descricao adicionado com sucesso.";


        // Redirecionamento HTTP

        header('Location: /listar-cursos', replace: false, response_code: 302);             // o "replace" serve para não substituir os valores prévios do cabeçalho
                                                                                            // o "response_code" é o código passado em código http (302 significa movido temporariamente)
    }
}








?>