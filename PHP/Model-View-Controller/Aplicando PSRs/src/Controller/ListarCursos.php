<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;


class ListarCursos implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;


    private $repositorioDeCursos;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new Response(
            status: 200,
            body: $this->renderizaHtml('/cursos/listar-cursos.php', [
                "cursos" => $this->repositorioDeCursos->findAll(),
                "titulo" => 'Lista de cursos'
            ])
        );
    }

}
