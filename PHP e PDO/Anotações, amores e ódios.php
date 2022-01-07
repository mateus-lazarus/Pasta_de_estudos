USAR PDO (Php Data Objects)

1 -> Saber com qual tipo de banco de dados irá se conectar 

2 -> Baixar (ou habilitar) o driver específico para PDO

3 -> Se conectar ao banco de dados pela função :

    Em SqLite :
        <?php
            $PDO = new PDO(dsn: 'sqlite:(caminhoAbsoluto)/banco.sqlite');
        ?>


    Em MySQL :
        <?php
            $PDO = new PDO(dsn: 'mysql:host=endereco_do_servidor;dbname=nome_do_banco', username: 'username', password: 'password');
        ?>


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 


ARQUIVO NÃO ENCONTRADO PDO Connection

Em MySQL : 
    Será jogado um erro fatal

Em SqLite :
    Será criado um novo banco de dados com o endereço especificado


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 


SqLite : Exec 
Retorna linhas afetadas pela execução

<?php

$student = new Student(null, 'Vinicius Dias', new DateTimeImmutable('1997-10-15'));
$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}');";

$PDO->exec($sqlInsert)      // retorna linhas afetadas

?>



........................................................................... 



QUERY -> fetchAll()

Puxa a busca de todos os dados de uma tabela devolvendo um array

<?php

$statement = $PDO->query('SELECT * FROM students');
var_dump($statement->fetchAll());

?>


Existem duas formas de se encontrar informações num banco de dados, cada coluna possui sua * identação númerica *
    e sua * identação específica *. Por exemplo :

        ["id"] ou [0] , ["name"] ou ["1"] , ["birth_date"] ou [2]


    Por esse motivo o var_dump do fetchAll() será :
        array(1) {
            [0]=>
            array(6) {
                ["id"]=>
                int(1)
                [0]=>
                int(1)
                ["name"]=>
                string(13) "Vinicius Dias"
                [1]=>
                string(13) "Vinicius Dias"
                ["birth_date"]=>
                string(10) "1997-10-15"
                [2]=>
                string(10) "1997-10-15"
            }
        }




........................................................................... 



fetchAll : parâmetros 


Fonte : https://www.php.net/manual/en/pdostatement.fetchall.php

Exemplo : 

        <?php 

        $statement = $PDO->query('SELECT * FROM students');

        var_dump($statement->fetchAll(PDO::FETCH_ASSOC) );

        ?>

        Resultado :


        array(1) {
            [0]=>
            array(3) {
                ["id"]=>
                int(1)
                ["name"]=>
                string(13) "Vinicius Dias"
                ["birth_date"]=>
                string(10) "1997-10-15"
            }
        }



........................................................................... 



PDO::FETCH_ASSOC: 
    Retorna cada linha como um array associativo, onde a chave é o nome da coluna, e o valor é o valor da coluna em si

PDO::FETCH_BOTH (esse é o padrão): 
    Retorna cada linha como um array com as chaves sendo tanto o índice da coluna (começando do 0) quanto o nome da coluna, ou seja, os valores acabam ficando duplicados nesse formato
PDO::FETCH_CLASS: 
    Cada linha do resultado é retornado como uma instância da classe especificada em outro parâmetro. A classe não pode ter parâmetros no construtor e cada coluna terá o seu valor atribuído a uma propriedade de mesmo nome no objeto criado

PDO::FETCH_INTO: 
    Funciona de forma muito semelhante ao FETCH_CLASS, mas ao invés de criar o objeto para você, ele preenche um objeto já criado com os valores buscados

PDO::FETCH_NUM: 
    Retorna cada linha como um array, onde a chave é o índice numérico da coluna, começando do 0, e o valor é o valor da coluna em si



........................................................................... 



PARA ACESSAR UM LINHA ESPECÍFICA | FETCH 

Captura uma única linha da tabela * students *, a linha indicada pelo * id *

    <?php

        $statement = $PDO->query('SELECT * FROM students WHERE id = 1');    // Where indica a LINHA da tabela
        $studentDataList = $statement->fetch(PDO::FETCH_ASSOC);
        var_dump($studentDataList);

    ?>



........................................................................... 



ACESSAR COLUNA ESPECÍFICA | FETCH COLUMN

Captura única coluna

        <?php

            $statement = $PDO->query('SELECT * FROM students WHERE id = 1');
            var_dump($statement->fetchColumn(1));
            exit();

        ?>



........................................................................... 



PASSAR INFORMAÇÕES POR REFERÊNCIA E POR VALOR 

        bindParam : passa valor por referência (permite alterar o valor da referência antes de executar o comando)
            $statement->bindParam(':name', $name );
    
        bindValue : passa o valor diretamente
            











