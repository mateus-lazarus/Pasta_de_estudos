ALT + J
PERMITE MANTER A SELEÇÃO DE COLUNAS PARA LINHAS DEBAIXO

eu sei quem eu sou
eu sei quem eu sou
eu sei quem eu sou
eu sei quem eu sou


pós :

eu sei eu sou
eu sei eu sou
eu sei eu sou
eu sei eu sou






........................................................................... 



ALT + SHIFT + J
COPIA A LINHA PARA BAIXO OU PARA CIMA


 
........................................................................... 



HERANÇA DE CLASSES

Pense no reino animal e a ordem de especificidade biológica (taxonomia) :

    Espécie > Gênero > Família > Ordem > Classe > Filo > Reino > Domínio

as heranças de classe funcionam da mesma forma, e o atributo EXTENDS faz filhos.


class Pessoa {$private string $nome;}

e agora queremos criar a classe para FUNCIONÁRIOS

class Funcionario extends Pessoa {$private string $cargo;}


Dessa forma, a variável nome da classe pessoa irá se extender a classe Funcionario e o mesmo adquirirá suas variáveis por herança.



........................................................................... 



“desenhe suas classes pensando no uso de herança, caso contrário proíba-a”
    — Effective Java, Joshua Bloch

Um bom artigo sobre o uso (ou não) de herança em classes 

https://blog.caelum.com.br/como-nao-aprender-orientacao-a-objetos-heranca/


a recomendação é : em caso de dúvida se deve usar composição ou herança, pergunte-se se aquela classe "É UM"

    Se um gato possui raça e patas, e um cachorro possui raça, patas e tipoDoPelo, logo Cachorro extends Gato?
                                                                                        Cachorro É UM Gato?


........................................................................... 



ACESSAR UM PAI DE UMA CLASSE

use * parent *          Ex: " parent::__construct "

class Funcionario extends Pessoa
{
    private string $nome;
    private string $cpf;
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);   // Assim podemos deixar PRIVADO as variáveis na classe pai. É o recomendado.
        $this->cargo = $cargo;
    }
}



........................................................................... 



MEIO TERMO ENTRE PUBLIC E PRIVATE
Permite o acesso para classes FILHAS, mas não do mundo externo.

o termo é * protected *


class Pessoa
{
    protected string $nome;
    protected CPF $cpf;
}

class Acessar extends Pessoa
{
    public function acessaNome() : void
    {
        return parent::nome;
    }
}



........................................................................... 



AGRUPAR E EVITAR CONFLITO DE CLASSES

O PHP trava caso duas classes possuam o mesmo nome, para tal é utilizado o * namespace * para individualizar nossas classes

(Topo de um arquivo)
...

namespace Alura\Banco\Modelo;


: para casos de maior especificidade podemos também utilizar
        a contra-barra \ é uma necessidade.


namespace Alura\Banco\Modelo\Conta;


isso fará com que tenhamos de usar a função USE

use Alura\Banco\Modelo\...

e uma maneira de ampliar o podemos das nossas importações é assim!

// o modo SUPER SAYAJIN com o uso de COLCHETES {}

use Alura\Banco\Modelo\{Endereco, CPF, Conta\Conta, Conta\Titular};



........................................................................... 



CLASSE = NOME DO ARQUIVO

Essa é uma convenção para maior facilidade ao acessar as informações.
Sempre lembre-se de separação FÍSICA E LÓGICA.



........................................................................... 



AUTOLOADER / EVITE DIVERSOS REQUIRES_ONCE

É uma função que é chamada toda vez que o PHP encontrar uma classe que não possua, procurando no caminho especificado por essa determinada classe.
Segue exemplo : 


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

use Alura\Banco\Modelo\{Endereco, CPF, Conta\Conta, Conta\Titular};

: dessa forma, no momento em que as classes destacadas em USE forem chamadas, o Autoloader irá ser chamado para encontrar o arquivo correspondente àquela classe
    e gerar um require_once



Há uma padronização a ser utilizada quando se pensa em AutoLoader.

Segue artigo : https://www.php-fig.org/psr/psr-4/



........................................................................... 



SOBREESCRITA DE MÉTODOS. 

Ao ser utilizar o MESMO NOME de um método na CLASSE PAI e na CLASSE FILHA, a CLASSE FILHA terá prioridade e o método chamado será a dela.
    Essa é a sobreescrição de métodos.


    class Funcionario {
        // outros atributos e metodos aqui
        public double getBonus() {
            return vendasDoMes * 0.01;
        }
    }

    class Gerente extends Funcionario {
        // outros atributos e metodos aqui
        public double getBonus() {
            return vendasDoMes * 0.05 + getSalario() * 0.1;
        }
    }



........................................................................... 



CLASSE ABSTRATA E FORÇAR CLASSES FILHAS A IMPLEMENTAR MÉTODOS

Uma classe abstrata por definição é uma classe que necessidade ser EXTENDIDA para que seja completa, pois é o "projeto de uma forma de bolo" e não a forma em si ainda.
    A abstração de uma classe também ocorre devido à alguma funcionalidade que deve ser implementada caso a caso em cada "forma de bolo". Segue exemplo.


    abstract class Conta
        {
            public function saca(float $valorASacar): void
            {
                $tarifaSaque = $valorASacar * $this->percentualTarifa();
                $valorSaque = $valorASacar + $tarifaSaque;
                if ($valorSaque > $this->saldo) {
                    echo "Saldo indisponível";
                    return;
                }

                $this->saldo -= $valorSaque;
            }

            abstract protected function percentualTarifa(): float;
        }


* a classe em si é somente ABSTRATA e para realmente existir a devo EXTENDER. *


    class ContaPoupanca extends Conta
        {
            protected function percentualTarifa(): float
            {
                return 0.03;
            }
        }


* agora está finalizado. A ContaPoupanca É UMA Conta, mas uma Conta NÃO É UMA ContaPoupanca.



........................................................................... 



QUATRO PILARES DA ORIENTAÇÃO A OBJETOS

    1 : Abstração, devemos abstrair conceitos macros do que queremos para então ir aprofundando-se

    2: Encapsulamento, devemos privar nosso código de alterações do mundo externo (getters and setters)

    3: Herança, podemos ter classes filhas por meio da máxima "X É UM Y?"

    4: Polimorfismo, objetos podem possuir DIVERSAS FORMAS. Segue exemplo.

        um Funcionário É UMA Pessoa
        um Desenvolvedor É UM Funcionário


Portanto um Desenvolver É UMA Pessoa, dessa forma uma função que apenas recebe variáveis do tipo Funcionário aceitará uma variável do tipo Desenvolvedor.


        function procuroPorPessoas (Pessoa $nome)
        {
            echo $this->recuperaNome();
        }

        procuroPorPessoas($umDesenvolvedor);


Muitas vezes a Herança pode ser inimigo do Polimorfismo, uma vez que a primeira aumenta o acoplamento e a segunda, majoritariamente, ajuda a diminuí-lo 


para o caso de querer reler, mas não achei tão útil o artigo : https://www.caelum.com.br/apostila-java-orientacao-objetos/heranca-reescrita-e-polimorfismo/#polimorfismo



........................................................................... 



DESIGN DE CÓDIGO #1 

PARA FUNÇÕES as chaves começaram na linha de baixo

PARA FUNÇÕES BOOLEANAS as chaves começam na mesma linha com espaço 

function ()
{
    
}


if () {

}



........................................................................... 



FINAL CLASS or FINAL FUNCTION

O keyword "final" quando antes de classes e métodos os tornam impossível de herdar e sobrescrever, respectivamente.
É perfeito para classes que não foram feitas para herança ou métodos que não podem ser subreescritos.


        final class A{
            public function f(){
                echo 'f';
            }
        }

        class b extends a{
            public function x(){
                echo 'x';
            }
        }

retorna no terminal :


        Class b may not inherit from final class (A)


Com métodos o caso é parecido

        class A{
            public final function f(){
                echo 'f';
            }
        }

        class b extends a{
            public function f(){
                echo 'minha implementação';
            }
        }

retorna no terminal :


        Cannot override final method A::f()


Fonte : https://pt.stackoverflow.com/questions/227213/para-que-serve-final-em-php



........................................................................... 



IMPLEMENTS vs EXTENDS em PHP 

"Implements" é uma keyword que traz métodos de uma "Interface" para uma classe, é um meio de proteger protocolos
        de uso de certos dados.

Exemplo :

    I have an e-commerce platform featuring multiple payment classes that all follow the same design.
    When a new payment class should be added, it's really easy to follow the defined design of the interface
    to ensure that all bits and pieces are there, from the beginning.


Já o exemplo de Extends é diferente : 

    I have one class called sessions with two child classes named sessioncookies and databasesessions. sessioncookies
    and databasesessions, together inherit a number of mutual config options from their parent sessions, making it easy
    to change a config option to affect all sorts of eventual visitor data storage.


Fonte : https://stackoverflow.com/questions/4961906/when-to-implement-and-extend



































