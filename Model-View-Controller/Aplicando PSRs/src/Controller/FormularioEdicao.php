<?php

namespace Alura\Cursos\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;


class FormularioEdicao implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;


    private $repositorioCursos;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioCursos = $entityManager->getRepository(Curso::class);
    }


    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $id = filter_var($request->getQueryParams()['id'], FILTER_VALIDATE_INT);


        if (is_null($id) || $id === false) {
            return new Response(status: 302, headers: ['Location' => '/listar-cursos']);
        }

        
        $curso = $this->repositorioCursos->find($id);

        return new Response(
            status: 200,
            body: $this->renderizaHtml('/cursos/formulario.php', [
                "curso" => $curso,
                "titulo" => 'Alterar curso : ' . $curso->getDescricao()
            ])
        );

    }
}