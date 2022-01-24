<?php

namespace Alura\Cursos\Controller;

use Alura\Cursos\Entity\Curso;
use Alura\Cursos\Infra\EntityManagerCreator;

class Exclusao extends ControllerComHtml implements InterfaceControladorRequisicao
{
    private $entityManager;


    public function __construct()
    {
        $this->entityManager = (new EntityManagerCreator)->getEntityManager();
    }


    public function processaRequisicao() : void
    {
        $id = filter_input(
            type: INPUT_GET,
            var_name: 'id',
            filter: FILTER_VALIDATE_INT);

        
        if (is_null($id) || $id === false) {
            header('Location: /listar-cursos', true, 302);

            $_SESSION['tipoMensagem'] = 'danger';
            $_SESSION['mensagem'] = 'ID inválido.';

            return;
        }

        $curso = $this->entityManager->getReference(Curso::class, $id);

        $this->entityManager->remove($curso);
        $this->entityManager->flush();

        $_SESSION['tipoMensagem'] = 'success';
        $_SESSION['mensagem'] = 'Curso deletado com sucesso.';

        header('Location: /listar-cursos', true, 302);
    }
}
