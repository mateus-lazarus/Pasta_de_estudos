<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Alura\Cursos\Infra\EntityManagerCreator;


class Persistencia implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;


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

        
        // Verificar se é um caso de INSERÇÃO ou ATUALIZAÇÃO
        
        $id = filter_input(
            type: INPUT_GET,
            var_name: 'id',
            filter: FILTER_VALIDATE_INT
        );
        
        
        if (!is_null($id) && $id !== false) {  
                     
            // $curso->setId($id);
            // $this->entityManager->merge();               Merge já está deprecated

            /** @var Curso $curso */
            $curso = $this->entityManager->find(Curso::class, $id);
            $curso->setDescricao($descricao);


            // Mensagem de confirmação
            $_SESSION['tipoMensagem'] = "success";
            $_SESSION['mensagem'] = "Curso  \" $descricao \"  atualizado com sucesso.";

            } else {

            // Criar modelo Curso
            $curso = new Curso();
            $curso->setDescricao($descricao);

            
            // Inserir no Banco
            $this->entityManager->persist($curso);


            // Mensagem de confirmação
            $_SESSION['tipoMensagem'] = "success";
            $_SESSION['mensagem'] = "Curso  \" $descricao \"  adicionado com sucesso.";
        }

        $this->entityManager->flush();
        


        // Redirecionamento HTTP

        header('Location: /listar-cursos', replace: false, response_code: 302);             // o "replace" serve para não substituir os valores prévios do cabeçalho
                                                                                            // o "response_code" é o código passado em código http (302 significa movido temporariamente)
    }
}








?>