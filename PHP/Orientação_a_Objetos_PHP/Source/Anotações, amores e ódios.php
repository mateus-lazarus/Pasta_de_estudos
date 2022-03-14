Array ou Lista em PHP 

pode ser definido por meio da função array() ou COLCHETES

$idadeList = array(10, 12, 13, 11, 9, 15, 22)

ou 

$idadeList = [10, 12, 13, 11, 9, 15, 22]



........................................................................... 


É possível contar elementos de um Array

use COUNT()

count($idadeList)



........................................................................... 



Podemos definir a indexação manualmente dentro de arrays ( com o símbolo =>)
 e um dicionário aqui é um ARRAY DE arrays

 $conta1 = [
    'nome' => 'Vinicius',
    'saldo' => 1000
];

$conta2 = [
    'nome' => 'Maria',
    'saldo' => 10000
];

$ContasCorrentes = [$conta1, $conta2];



........................................................................... 


Não precisa ser conhecido indíce e trabalha para cada item individualmente : ForEach

$ContasCorrentes = [$conta1,
    $conta2,
    $conta3
];


foreach($ContasCorrentes as $conta) {
    echo $conta['nome'] . PHP_EOL;
}



e para ter acesso ao índice podemos utilizar


foreach($ContasCorrentes as $cpf => $conta) {
    echo $cpf . "  " . $conta['nome'] . PHP_EOL;
}



........................................................................... 



Para adicionar valores

Lista[ α ] = valor_desejado

α : indíce numérico ou identificador


caso seja um indíce númerico, basta que se deixe vazio e o programa irá o colocar como último da lista 

Lista[] = valor_desejado



........................................................................... 


Tipos de chaves para Listas

o PHP apenas aceita : STRINGS e INTEGERS

dessa forma utilizar qualquer outro valor será convertido (e atenção, o PHP caso identifique número numa string o verá como número)

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd'
];

o valor último será único e será 'd', pois são convertidos os valores e 1 e '1' se confundem como o mesmo valor


/* Documentação : https://www.php.net/manual/pt_BR/language.types.array.php
/* Comparação de elementos : https://www.php.net/manual/pt_BR/types.comparisons.php



........................................................................... 



$saldo = 1000

$saldo += 100. Saldo será igual a 1000 + 100

$saldo -= 100. Saldo será igual a 1000 - 100



........................................................................... 


CRIAR FUNÇÕES

function FunctionCriada ($recebe_argumentos) {
    trabalha argumentos dados;
}


return também existe no PHP


function Adiciona2 ($x) {$x += 2; return $x;}

$quinze = 15
$quinze = Adiciona2($quinze)

$quinze será 17

........................................................................... 


Dentro de STRINGS COMPLEXAS (aspas duplas "")

uma mensagem que seria assim :  $cpf . "   " . $conta['titular'] . "   " . $conta['saldo']

se torna :  "$cpf   $conta[titular]   $conta[saldo]"

** não é preciso dizer que o conteúdo dentro de chaves são strings ao php, somente nesse específico caso




........................................................................... 


Também é interessante somar ao caso acima o uso de CHAVES {} para manter a formatação de acesso padrão 

"$cpf   {$conta['titular']}   {$conta['saldo']}"

são chamadas de COMPLEX STRINGS porque permitem cálculos complexos dentro delas 

para saber mais : https://php.net/manual/en/language.types.string.php (CTRL + F e procure por Complex (curly) syntax )



........................................................................... 



Para separar funções em outro arquivo, podemos utilizar as seguintes funções :

INCLUDE 'arquivo_de_funcoes.php';
    caso o nome esteja errado, o PHP dará somente um WARNING, mas continuará a rodar até gerar um ERROR ao chamar uma função que não existe


REQUIRE 'arquivo_de_funcoes.php'; 
    caso dê problema, o PHP dará um ERROR e o programa travará já aqui


** caso qualquer uma dessas funções seja DUPLICADA, o PHP irá travar. Para funcionar é necessário que utilize o :

REQUIRE_ONCE , pois irá verificar se o arquivo já foi incluído no código e, se não, irá incluí-lo

........................................................................... 


Os três níveis de erro do PHP (os principais)

— o WARNING : um aviso, mas que permite continuar o código com o erro 

— o NOTICE : o PHP encontrou um POSSÍVEL error 

— o ERROR : Fatal run-time errors. O código para!



........................................................................... 
 


VALOR VS REFERÊNCIA

O acesso de * valor * (ou seja, duplicar uma xícara X1 para então modificar a cópia feita) é feito para proteger o valor original acessado

function titularComLetrasMaisculas (array $conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

No final, quando acessar novamente $conta['titular'] o nome estará como era antes



O acesso de * referência * (modifica diretamente o valor alocado na memória) é usado em casos específicos, pois pode bagunçar um código inteiro

a única diferença é a forma de acessá-lo, com um & (e-comercial)

function titularComLetrasMaisculas (array &$conta)



........................................................................... 



a extensão MBSTRING é importante para trabalhar com caracteres com mais de um byte, então sempre que possível
    use essa extensão para gerir strings

    exemplo : 

        $texto = mb_strtoupper('eu sou fofo')
        = EU SOU FOFO


Outra explicação : passar a referência para a variável, ou seja, ao invés de passar seu valor, passar o endereço onde esta variável está armazenada na memória



........................................................................... 



Duplicar linhas no VISUAL STUDIO CODE

editor.action.copyLinesDownAction 
editor.action.copyLinesUpAction

Alt + Shift + Seta(up or down)

exemplo :

abc123
abc123
abc123



........................................................................... 


é possível dar pulos lógicos como esse 

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem(
        "$cpf $titular $saldo"
    );
}


podemos inclusive tirar a função LIST e usarmos COLCHETES


['titular' => $titular, 'saldo' => $saldo] = $conta;


será usada a chave 'titular' para definir $titular
será usada a chave 'saldo' para definir $saldo

$CONTA = [$titular, $saldo]



........................................................................... 


UNSET é a borracha de memória do PHP 

ele apaga variáveis e itens de uma lista 

lista_temp = ['mateus', 'ricardo', 'beija-flor', 'orangotango'];

unset(lista_temp['beija-flor']);


pronto, esse item será tirado da lista e o tamanho da mesma recalculado

e unset pode receber VÁRIOS ARGUMENTOS PARA LIMPAR de uma única vez


unset(lista_temp['beija-flor'], lista_temp['ricardo']);






........................................................................... 



HOSTEAR UM SITE PELO PHP 

cd "Pasta_Local_do_Site"

php -S localhost:"Porta"


* para acessar código específicos podemos usar determinado endereço no Google :

    localhost:8080/"nome_do_arquivo_desejado".php


........................................................................... 



PHP e HTML se mesclam de uma forma simbiótica

<?php código_php ?>

<!DOCTYPE html><html> corpo html </html>

<?= forma_simplifica_dentro_do_html ?>



........................................................................... 



































