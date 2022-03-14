<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Helper\RenderizadorDeHtmlTrait;
use Alura\Cursos\Infra\EntityManagerCreator;

class FormularioEdicao implements InterfaceControladorRequisicao
{
    use RenderizadorDeHtmlTrait;


    private $repositorioCursos;


    public function __construct()
    {
        $entityManager = (new EntityManagerCreator)->getEntityManager();
        $this->repositorioCursos = $entityManager->getRepository(Curso::class);
    }


    public function processaRequisicao() : void
    {
        $id = filter_input(
            type: INPUT_GET,
            var_name: 'id',
            filter: FILTER_VALIDATE_INT
        );

        if (is_null($id) || $id === false) {
            header(header: 'Location: /listar-cursos', replace: true, response_code: 302);
            return;
        }

        $curso = $this->repositorioCursos->find($id);
        echo $this->renderizaHtml('/cursos/formulario.php', [
            "curso" => $curso,
            "titulo" => 'Alterar curso : ' . $curso->getDescricao()
        ]);
    }
}
