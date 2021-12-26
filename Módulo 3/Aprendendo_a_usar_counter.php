<?php

class FormaDeBolo
{
    private string $nome;
    private int $ID;
    private static int $contador = 0;


    function __construct($nome, $ID)
    {
        $this->nome = $nome;
        $this->ID = $ID;

        self::$contador++;
        echo self::$contador;
    }
}


$BoloUm = new FormaDeBolo('Chocolate', 17);








?>