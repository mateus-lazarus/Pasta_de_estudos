<?php


/*
O uso mais eficiência ao se carregar (require_once) diversas classes, pois assim que o PHP souber que não possuíamos tal classe, ele ativará o AutoLoader para procurar
    pelo caminho que especificamos
*/

spl_autoload_register( function(string $nomeCompletoDaClasse)
{
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);      // Assim temos o endereço completo de em que pasta ela está
    $caminhoArquivo .= '.php';

    if (file_exists($caminhoArquivo))
    {
        require_once $caminhoArquivo;
    }
});


?>