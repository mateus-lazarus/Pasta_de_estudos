<?php

use Alura\Cursos\Controller\{
    Exclusao,
    FormularioInsercao
};

return [
    "/novo-curso" => FormularioInsercao::class,
    "/excluir-curso" => Exclusao::class,
];

// Algo legal do PHP de poder retornar algum valor como se fosse uma função a partir de um Require no arquivo