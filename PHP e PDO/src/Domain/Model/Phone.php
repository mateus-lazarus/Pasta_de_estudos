<?php

namespace Alura\Pdo\Domain\Model;

class Phone
{
    private int $id;
    private string $area_code;      // Estão em string, pois não será feito nenhum cálculo matemática com essas informações
    private string $number;

    public function __construct(?int $id, string $area_code, string $number)
    {
        $this->id = $id;
        $this->area_code = $area_code;
        $this->number = $number;
    }

    public function formattedPhone() : string
    {
        $id = '+' . $this->id . ' ';
        $area_code = '(' . $this->id . ') ';
        $number = "$this->number";

        return $id . $area_code . $number;
    }
}
