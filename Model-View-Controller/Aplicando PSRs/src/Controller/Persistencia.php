<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMessageTrait;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Persistencia implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;
    use FlashMessageTrait;


    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        // Pegar dados do usuário   (POST)
        $descricao = $request->getParsedBody()['descricao'];

        // Verificar se é um caso de INSERÇÃO ou ATUALIZAÇÃO    (está na URL)
        $id = $request->getQueryParams()['id'];


        if (!is_null($id) && $id !== false) {  
    
            /** @var Curso $curso */
            $curso = $this->entityManager->find(Curso::class, $id);
            $curso->setDescricao($descricao);
    
    
            // Mensagem de confirmação
            $this->defineMensagem('success', "Curso  \" $descricao \"  atualizado com sucesso.");
    
        } else {
    
            // Criar modelo Curso
            $curso = new Curso();
            $curso->setDescricao($descricao);

            
            // Inserir no Banco
            $this->entityManager->persist($curso);
    
    
            // Mensagem de confirmação
            $this->defineMensagem('success', "Curso  \" $descricao \"  adicionado com sucesso.");
        }
    
        $this->entityManager->flush();
        
    
    
        // Redirecionamento HTTP
    
        return new Response(                                            // o "replace" serve para não substituir os valores prévios do cabeçalho
            status: 302,                                                // o "response_code" é o código passado em código http (302 significa movido temporariamente)
            headers: [
                'Location' => '/listar-cursos'
            ]
        );
    }

}
