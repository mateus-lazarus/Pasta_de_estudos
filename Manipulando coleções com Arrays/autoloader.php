<?php

namespace Estudos;

spl_autoload_register(
    function (string $caminho) : void
    {
        $source = '\src';
        $diretorio_classe = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);
        require getcwd() . $source . DIRECTORY_SEPARATOR . $diretorio_classe . '.php';
    }
);

?>