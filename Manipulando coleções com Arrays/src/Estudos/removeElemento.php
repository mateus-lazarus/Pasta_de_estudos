<?php

namespace Estudos;

class removeElemento
{
    static function removerElemento(string | int $elemento, array &$array) : void
    {
        $index = array_search($elemento, $array, strict:true);
        unset($array[$index]);
    }
}

?>