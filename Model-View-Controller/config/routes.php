<?php

use Alura\Cursos\Controller\{
    Exclusao,
    FormularioEdicao,
    FormularioInsercao,
    FormularioLogin,
    ListarCursos,
    Persistencia
};

return [
    "/listar-cursos" => ListarCursos::class,
    "/novo-curso" => FormularioInsercao::class,
    "/salvar-curso" => Persistencia::class,
    "/excluir-curso" => Exclusao::class,
    "/alterar-curso" => FormularioEdicao::class,
    "/login" => FormularioLogin::class
];

// Algo legal do PHP de poder retornar algum valor como se fosse uma função a partir de um Require no arquivo