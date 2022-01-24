<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;

class Exclusao implements RequestHandlerInterface
{
    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $idEntidade = filter_var($request->getQueryParams()['id'], FILTER_VALIDATE_INT);

        $entidade = $this->entityManager->getReference(Curso::class, $idEntidade);
        $this->entityManager->remove($entidade);
        $this->entityManager->flush();

        return new Response(status: 302, headers: ['Location' => '/novo-curso']);
    }
}






?>