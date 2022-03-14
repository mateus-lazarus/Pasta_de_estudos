EXPLODE : https://www.w3schools.com/php/func_string_explode.asp

Quebra uma string em um array com determinado especificar
Exemplo : 
    <?php

        $texto = 'Eu sei de tudo';
        return explode(' ', $texto)

    ?>

retornará : 
    ['Eu', 'sei', 'de', tudo]



~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 


IMPLODE : https://www.w3schools.com/php/func_string_implode.asp

Une um array para uma string com especificadores
Exemplo : 
    <?php

        $texto = ['Eu', 'sei', 'de', 'tudo'];
        return explode(' . ', $texto);

    ?>

retornará : 
    'Eu . sei . de . tudo'



........................................................................... 



SERVER BUILT-IN DO PHP

Basta abrir o cmd no diretório dos seus arquivos PHP que quer rodar e então definir a porta em que será aberto o server

Exemplo : 
    cd C:\Users\Pichau\Desktop\Aulas Alura\PHP\Estudos_em_Php\Manipulando coleções com Arrays 
    php -S localhost:8000



........................................................................... 



TYPE JUGGLING : https://www.php.net/manual/en/language.types.type-juggling.php#:~:text=Type%20Juggling%20%C2%B6,%2C%20%24var%20becomes%20a%20string.

Problema do PHP converter tipos, por exemplo, 0 é False e True é 1
    assim ao se fazer um :
        <?php
            $index = array_search($elemento, $array);
            unset($array[$index]);
        ?>

    se o ponteiro passado foi inexistente, a função ARRAY_SEARCH irá retornar FALSE que então será lido como 0 pelo 
     UNSET -> Removendo o primeiro elemento da lista


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 


DECLARE STRICT TYPES : https://www.php.net/manual/en/control-structures.declare.php

Outro problema ocorre com a conversão automática do PHP de STRINGS PARA NUMEROS e VICE-VERSA, pois o array_search irá ler de maneira
 errada deletar o elemento errado. Mas podemos contornar isso pela declaração na função de 

    <?php
    array_search($needle, $array, strict:true)
    ?>

Exemplo : 
    <?php
        $array = [
            'Mateus',
            'João',
            12,
            '12',
            'Cleyber'
        ];

        $index = array_search(12, $array);
        unset($array[$index]);
    ?>

deixará o número inteiro intacto e retornará :
    [
        'Mateus',
        'João',
        12,
        'Cleyber'
    ]

    pois converteu o INT 12 para STRING 12




Para corrigirmos devemos declarar um USO ESTRITO DO TIPO informado 

        <?php
            declare(strict_types = 1);
        ?>

    Deve ser a primeira linha de código do script! E deve ser inserido INDIVIDUALMENTE, pois é uma declaração para o tal arquivo



........................................................................... 



SUPRIMIR ERROS 

É possível suprimir erros de uma função adicionado um @ ao seu início.

    <?php
        @include_once '...'
    ?>



........................................................................... 



ARRAY_DIFF : A diferença entre arrays

Pode receber parâmetros e devolve um array.



........................................................................... 



ARRAY_MERGE : Une dois arrays (é como fazer um append para todos os elementos)



........................................................................... 



ARRAY_COMBINE : Torna os valores do ARRAY 1 as KEYS para acessar os valores do ARRAY 2
    
Denominado de ARRAY ASSOCIATIVO ou MAP.

    <?php

        $correntistas = [
            'Giovanni',
            'João'
        ];

        $saldos = [
            3500,
            1500
        ];

        var_dump(array_combine($correntistas, $saldos));

    ?>

retornará :
    [
    "Giovanni" => 3500,
    "João" => 1500    
    ]



........................................................................... 




