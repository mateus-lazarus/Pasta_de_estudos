<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;


class ListarCursosEmJson implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;


    private $repositorioDeCursos;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $cursos = $this->repositorioDeCursos->findAll();
        $cursosJson = json_encode($cursos, JSON_PRETTY_PRINT);

        return new Response(
            status: 200,
            headers: ['Content-Type' => 'aplication/json'],
            body: $cursosJson
        );
    }

}