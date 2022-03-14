<?php

require_once 'C:\Users\Pichau\Desktop\Aulas Alura\PHP\Estudos_em_Php\PHP e PDO\src\Infrastructure\Persistence\ConnectionCreator.php';
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

$PDO = ConnectionCreator::createConnection();

echo 'Successful Connection.';


$PDO->exec("INSERT INTO phones (area_code, number, student_id) VALUES ('24', '999999999', 1) , ('24', '222222222', 1);");
exit();

$createTableSql = '
    CREATE TABLE IF NOT EXISTS students (
        id INTEGER PRIMARY KEY,
        name TEXT,
        birth_date TEXT
    );


    CREATE TABLE IF NOT EXISTS phones (
        id INTEGER PRIMARY KEY,
        area_code TEXT,
        number TEXT,
        student_id INTEGER,
        FOREIGN KEY (student_id) REFERENCES students(id)
    );
';

$PDO->exec($createTableSql);

?>