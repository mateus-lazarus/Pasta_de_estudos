<?php

namespace Alura\Banco\Modelo;


/**
 * class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

final class Endereco
{
    use AcessoPropriedades;

    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;     // o usamos como string, pois facilita para identificação de apartamentos (ex: 19-B) e é um número que não usaremos para cálculo

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function __toString()
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __get(string $parametro)
    {
        $metodo = ucfirst($parametro);
        $metodo = 'recupera' . $metodo;
        return $this->$metodo();
    }

    public function __set($parametro, $novoValor)
    {
        $metodo = strtolower($parametro);
        $this->$metodo = $novoValor;
    }



    public function recuperaCidade() : string
    {
        return $this->cidade;
    }
    public function recuperaBairro() : string
    {
        return $this->bairro;
    }
    public function recuperaRua() : string
    {
        return $this->rua;
    }
    public function recuperaNumero() : string
    {
        return $this->numero;
    }
}

$endereco = new Endereco('cidade', 'bairro', 'rua', 'numero');
echo $endereco . PHP_EOL;

$endereco->rua = 'novarua';

echo $endereco;