<?php

// TROCADO POR UMA TRAIT PARA AUMENTAR O ENCAPSULAMENTO DO CÓDIGO.

namespace Alura\Cursos\Controller;


abstract class ControllerComHtml
{
    public function renderizaHtml(string $caminhoTemplate, array $dados) : string
    {
        extract($dados);

        ob_start();

        require __DIR__ . '/../../view' . $caminhoTemplate;

        $html = ob_get_clean();

        return $html;
    }
}
?>