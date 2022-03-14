<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;


class FormularioInsercao implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;


    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new Response(
            status: 200,
            body: $this->renderizaHtml('\cursos\formulario.php', [
                "titulo" => 'Novo Curso'
            ])
        );
    }
}
