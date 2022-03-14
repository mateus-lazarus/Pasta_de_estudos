<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Nyholm\Psr7\Response;
use SimpleXMLElement;

class ListarCursosEmXml implements RequestHandlerInterface
{
    use RenderizadorDeHtmlTrait;


    private $repositorioDeCursos;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        /** @var Curso[] $cursos */
        $cursos = $this->repositorioDeCursos->findAll();

        $cursosEmXml = new SimpleXMLElement('<cursos/>');
        
        foreach ($cursos as $curso) {
            $cursoXML = $cursosEmXml->addChild('curso');

            $id = $curso->getId();
            $descricao = $curso->getDescricao();

            $cursoXML->addAttribute('id', $id );
            $cursoXML->addAttribute('descricao', $descricao );
        }

        return new Response(
            status: 200,
            headers: ['Content-Type' => 'aplication/xml'],
            body: $cursosEmXml->asXML()
        );
    }

}
