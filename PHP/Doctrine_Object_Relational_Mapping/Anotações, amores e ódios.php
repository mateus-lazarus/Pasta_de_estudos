DOCTRINE CONFIGURAÇÃO

-> Composer require doctrine/bundle , doctrine/orm (somente baixar o ORM não funcionou na minha máquina)

-> Ir em COMPOSER.JSON e adicionar o seguinte caminho lá :
    "autoload": {
        "psr-4": {
            "Alura\\Doctrine\\" : "src/"
        }
    }

-> Criar um Entity Manager Factory : 
    
    Aqui existem opções de como mapear suas Entidades, por meio de
        Anotações dentro do código (uma contradição ao Clean Code por misturar Objetos a Entidades)
        XML (ainda não sei como fazer funcionar por esse)
        PHP CODE

    Fonte : https://www.doctrine-project.org/projects/doctrine-orm/en/2.8/reference/basic-mapping.html


    <?php
        use Doctrine\ORM\EntityManager;
        use Doctrine\ORM\EntityManagerInterface;
        use Doctrine\ORM\Tools\Setup;

        class EntityManagerFactory
        {
            /** @return EntityManagerInterface */
            public function getEntityManager() : EntityManagerInterface
            {
                $rootDir = __DIR__ . '/../..';
                $config = Setup::createAnnotationMetadataConfiguration(
                    [$rootDir . '/src'],
                    isDevMode: true
                );
        
                $connection = [
                    "driver" => 'pdo_sqlite',
                    "path" => $rootDir . '/var/data/banco.sqlite'
                ];
        
                return EntityManager::create($connection, $config);
            }
        }
    ?>



........................................................................... 



DOCTRINE COMANDOS

O Doctrine possui comandos que podem ser executados.
No CMD :
    -> php vendor\bin\doctrine list     (quando já aberto na pasta do projeto)
    -> vendor\bin\doctrine.bat list     (quando já aberto na pasta do projeto)


Comandos principais do Doctrine :
    -> orm:info                             (mostra informações de entidades já configuradas)
    -> orm:mapping:describe entityName      (devolve as informações de formatação daquela entidade)
    -> orm:schema-tools:create              (cria um schema — tabela — no banco de dados, e até o banco de dados se precisar)



........................................................................... 



DOCTRINE INSERIR ALUNO

Ao buscarmos inserir alguma entidade é necessário que estejamos cientes de dois comandos do EntityManagerInterface

EntityManagerInterface->persiste($Entidade) : 
    coloca na bolsa essa Entidade para que a próxima vez que conversar com o banco de dados seja inserido essa informação.
    é possível passar quantas alterações (desde que lógicas) e Entidades dentro da bolsa antes do contato final.
    todas alterações até o contato final com o banco serão processadas.

    
EntityManagerInterface->flush() : 
    esse é o contato final com o banco e quando ocorre a inserção das Entidades.



........................................................................... 



ARGV no PHP : https://www.php.net/manual/en/reserved.variables.argv.php

É possível passar argumentos para dentro da execução de um script php.

No CMD : 
    {__DIR__}/script.php "Argumento passado 1" "Argumento passado 2"

No PHP :
    <?php
        echo $argv[0] . PHP_EOL;
        echo $argv[1] . PHP_EOL;
        echo $argv[2] . PHP_EOL;
    ?>

retornará : 
    "script.php"
    "Argumento passado 1"
    "Argumento passado 2"



........................................................................... 



DOCTRINE REPOSITORY

Há 4 comandos dentro de um repositório : 
    -> findAll      (devolve um array com todas informações da tabela)
    -> find         (único objeto por meio do ID)
    -> findOneBy    (busca por um array de critérios e devolve um objeto)
    -> findBy       (busca por um array de critérios e devolve um array de objetos)

    <?php

        $entityManagerFactory = new EntityManagerFactory();
        $entityManager = $entityManagerFactory->getEntityManager();
        $alunoRepository = $entityManager->getRepository(Aluno::class);

        $alunoRepository->findAll();

        $alunoRepository->find(id: 1);

        $alunoRepository->findOneBy(
            [
                "nome" => "Mateus Dias Toretto"
            ]
        );

        $alunoRepository->findBy(
            [
                "nome" => "Mateus Dias Toretto"
            ]
        );

    ?>


Além de realizar filtros, o método findBy também nos permite informar o critério de ordenação da query a ser executada
 (pra quem conhece SQL, o bom e velho ORDER BY), o limite de resultados a trazer (LIMIT ou TOP) e a partir de qual item trazer
 os resultados (OFFSET).

    <?php
        public function findBy(
            array $criteria,
            ?array $orderBy = null,
            ?int $limit = null,
            ?int $offset = null
        )
    ?>



........................................................................... 



DOCTRINE ATUALIZAR ALUNO

No Doctrine não é preciso que você faça um PERSIST() quando já puxou uma Entidade do Banco de Dados

Usando Repository : 
    <?php
        $alunoRepository = $entityManager->getRepository(Aluno::class);

        $aluno = $alunoRepository->find($id);
        $aluno->setNome($novoNome);                 // Não precisa de persist()

        $entityManager->flush();
    ?>


Usando EntityManager :
    <?php
        $aluno = $entityManager->find(Aluno::class, $id);       // Somente é possível buscar um elemento por vez dessa forma
        $aluno->setNome($novoNome);                 // Não precisa de persist()

        $entityManager->flush();
    ?>



........................................................................... 



DOCTRINE REMOVER ALUNO

Há duas formas de se remover um aluno. A primeira o buscando e então deletando, outra pegando sua referência e então executando uma única query

    <?php

        $id = $argv[1];
        // $aluno = $entityManager->find(Aluno::class, $id);            // Faz com que seja executadas 2 queries dentro do banco de dados, mas garante que exista
                                                                        // uma confirmação de que a Entidade estivesse


        $aluno = $entityManager->getReference(Aluno::class, $id);       // Pega a referência de uma entidade que o Doctrine já gerencia sem executar uma query


        $entityManager->remove($aluno);


        $entityManager->flush();

    ?>



........................................................................... 



SETTERS CONSECUTIVOS

Para toda função SET num objeto, você pode retornar o próprio objeto para que seja possível fazer chamadas consecutivas.

Uma classe teórica : 
    <?php
        class Calculadora
        {
            private $resultado = 0;


            public function setAdicao($numero) : self
            {
                $this->resultado += $numero;
                return $this;
            }

            public function setSubtracao($numero) : self
            {
                $this->resultado -= $numero;
                return $this;
            }

            public function setMultiplicacao($numero) : self
            {
                $this->resultado = $this->resultado * $numero;
                return $this;
            }
        }
    ?>


Permite chamadas consecutivas :
    <?php

        $calculadora = new Calculadora();
        $calculadora->setAdicao(3)->setSubtracao(10)->setMultiplicacao(3)->setAdicao(22);
    ?>
    


........................................................................... 



DOCTRINE MIGRATIONS : https://www.doctrine-project.org/projects/doctrine-migrations/en/3.3/reference/introduction.html

Serve para versionar o banco de dados


Instalação : 
-> composer require doctrine/migrations
-> criar arquivo migrations.php, link de informação : https://www.doctrine-project.org/projects/doctrine-migrations/en/3.3/reference/configuration.html
    

Comandos :
-> vendor\bin\doctrine-migrations   (mostra todos os comandos)

-> migrations:diff                  (gera um arquivo da diferença do banco de dados e o código sql a ser enviado)
-> migrations:migrate               (faz a migração de TODOS OS SCHEMAS para o banco de dados)



........................................................................... 











