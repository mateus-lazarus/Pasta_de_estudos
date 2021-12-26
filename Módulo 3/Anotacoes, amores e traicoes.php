VARIÁVEL DE CLASSE

Por meio do * static *

class Conta {
    public static $variavelDeClasse;
}



........................................................................... 



LIMPAR VARIÁVEL

Limpa valor de variável. * unset *

unset($variavel);



........................................................................... 



GARBAGE COLLECTOR

Limpa objetos sem referência na memória. A maioria das linguagens o possuem e pode ser acessado como um dos MAGIC METHODS

class Conta {
    public function __destructor() {
        echo 'utilizando o Garbage Collector.';
    }
}

new Conta();    // como não está endereço a nenhuma variável, não possue referência.



........................................................................... 



MAGIC METHODS

Magic methods are special methods which override PHP's default's action when certain actions are performed on an object. A maioria das linguagens os têm.

__constructor()

__destructor()

... 




........................................................................... 



CLASSES DIFERENTES ARQUIVOS DIFERENTES

É uma recomendação de boas práticas



........................................................................... 



COMPOSIÇÃO DE OBJETOS É UMA BOA!!

pois permite maior especificidade no tratamento de informações. Logo, não se intimide por unir compor Objetos



........................................................................... 



strlen($target_string) -> string length

strpos($target_string, $needle) -> position of the last occurance

substr($target_string, $position, $length) -> return from the position to the end (but you can define length.)

intval() -> get the integer value of a variable



........................................................................... 



ACESSAR KEY AND VALUE DE UMA LISTA

foreach($lista as $KEY => $VALUE)



........................................................................... 



SAÍDA DE VALIDAÇÕES DENTRO DE UMA CLASSE

use

    return;

para sair de processos de validação que falharam dentro de uma classe.



........................................................................... 



É importante saber diferenciar Valores e Referências, assim, é interessante que se tenha em mente se tal variável ou classe deve ser utilizada.
Um problema simples de Aliasing Bug (bug de alienação) é esse:

/*


Date retirementDate = new Date(Date.parse("Tue 1 Nov 2016"));

// this means we need a retirement party
Date partyDate = retirementDate;

// but that date is a Tuesday, let's party on the weekend
partyDate.setDate(5);

assertEquals(new Date(Date.parse("Sat 5 Nov 2016")), retirementDate);
// oops, now I have to work three more days :-(


*/



Fonte : https://martinfowler.com/bliki/ValueObject.html


































