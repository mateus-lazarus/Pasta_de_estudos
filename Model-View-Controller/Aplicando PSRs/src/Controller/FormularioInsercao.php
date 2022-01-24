<?php

namespace Alura\Cursos\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;


class FormularioInsercao implements RequestHandlerInterface
{
    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = 'Resposta';
        return new Response(status: 200, headers: [], body: $html);
    }
}
