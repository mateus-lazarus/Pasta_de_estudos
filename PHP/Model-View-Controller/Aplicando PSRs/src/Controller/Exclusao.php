<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\FlashMessageTrait;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;

class Exclusao implements RequestHandlerInterface
{
    use FlashMessageTrait;


    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $idEntidade = filter_var($request->getQueryParams()['id'], FILTER_VALIDATE_INT);

        /** @var Curso $entidade */
        $entidade = $this->entityManager->getReference(Curso::class, $idEntidade);
        $descricao =  $entidade->getDescricao();
        $this->entityManager->remove($entidade);
        $this->entityManager->flush();

        $this->defineMensagem('success', "Curso  \" $descricao \"  deletado com sucesso.");

        return new Response(status: 302, headers: ['Location' => '/listar-cursos']);
    }
}
