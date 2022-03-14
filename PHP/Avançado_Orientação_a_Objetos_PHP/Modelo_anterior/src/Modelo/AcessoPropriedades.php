<?php

namespace Alura\Banco\Modelo;


trait AcessoPropriedades
{
    public function __get(string $parametro)
    {
        $metodo = ucfirst($parametro);
        $metodo = 'recupera' . $metodo;
        return $this->$metodo();
    }
}
