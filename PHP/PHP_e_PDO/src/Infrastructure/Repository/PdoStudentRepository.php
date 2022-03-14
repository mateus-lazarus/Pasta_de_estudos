<?php

namespace Alura\Pdo\Infrastructure\Repository;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use DateTimeImmutable;
use PDO;
use PDOStatement;
use Alura\Pdo\Domain\Model\Phone;

require_once 'C:\Users\Pichau\Desktop\Aulas Alura\PHP\Estudos_em_Php\PHP e PDO\vendor\autoload.php';

class PdoStudentRepository implements StudentRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }


    public function allStudents() : array
    {
        $sqlQuery = 'SELECT * FROM students';
        $preparedStatement = $this->connection->query($sqlQuery);

        return $this->hydrateStudentList($preparedStatement);
    }


    public function studentsBirthAt(\DateTimeInterface $birthDate) : array
    {
        $sqlQuery = 'SELECT * FROM students WHERE birth_date = ?;';
        $preparedStatement = $this->connection->prepare($sqlQuery);
        $preparedStatement->bindValue(1, $birthDate->format('Y-m-d') );
        $preparedStatement->execute();

        return $this->hydrateStudentList($preparedStatement);
    }


    private function hydrateStudentList(PDOStatement $preparedStatement)
    {
        $studentDataList = $preparedStatement->fetchAll();
        $studentList = [];

        foreach ($studentDataList as $studentData) {
            $studentList[] = new Student(
                $studentData['id'],
                $studentData['name'],
                new DateTimeImmutable($studentData['birth_date'])
            );
        }

        return $studentList;
    }


    public function fillPhonesOf(Student $student) : void
    {
        $sqlQuery = 'SELECT id, area_code, number FROM phones WHERE student_id = ?';
        $preparedStatement = $this->connection->prepare($sqlQuery);
        $preparedStatement->bindValue(1, $student->id(), PDO::PARAM_INT);
        $preparedStatement->execute();

        $phoneDataList = $preparedStatement->fetchAll();
        foreach ($phoneDataList as $phoneData) {
            $phone = new Phone(
                $phoneData['id'],
                $phoneData['area_code'],
                $phoneData['number']
            );

            $student->addPhone($phone);
        }

    }


    public function saveStudent(Student $student) : bool
    {
        if ($student->id() === null) {
            return $this->insert($student);
        }

        return $this->update($student);
    }


    private function insert(Student $student) : bool
    {
        $sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";
        $preparedStatement = $this->connection->prepare($sqlInsert);


        $success = $preparedStatement->execute([
            ':name' => $student->name(),
            ':birth_date' => $student->birthDate()->format('Y-m-d')
        ]);

        if ($success) {
            $student->defineId($this->connection->lastInsertId() );
        }

        return $success;
    }

    
    private function update(Student $student)
    {
        $updateQuery = 'UPDATE students SET name = :name, birth_date WHERE id = :id;';
        $preparedStatement = $this->connection->prepare($updateQuery);
        $preparedStatement->bindValue(':name', $student->name() );
        $preparedStatement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d') );
        $preparedStatement->bindValue(':id', $student->id() );

        return $this->hydrateStudentList($preparedStatement);
    }


    public function removeStudent(Student $student) : bool
    {
        $sqlDelete = 'DELETE FROM students WHERE id = ?;';
        $preparedStatement = $this->connection->prepare($sqlDelete);

        $preparedStatement->bindValue(1, $student->id(), PDO::PARAM_INT);
        return $preparedStatement->execute();
    }


    public function studentsWithPhones(): array
    {
        $sqlQuery = 'SELECT students.id,
                            students.name,
                            students.birth_date,
                            phones.id AS phone_id,
                            phones.area_code,
                            phones.number
                    FROM students
                    JOIN phones
                    ON students.id = phones.student_id;';

        $preparedStatement = $this->connection->query($sqlQuery);
        $result = $preparedStatement->fetchAll();
        $studentList = [];


        foreach ($result as $row) {

            if (array_key_exists($row['id'], $studentList) == false) {
                $student = new Student(
                    $row['id'],
                    $row['name'],
                    new DateTimeImmutable($row['birth_date'])
                );}

                $studentList[$row['id']] = $student;

            $phone = new Phone(
                $row['phone_id'],
                $row['area_code'],
                $row['number']
            );

            $studentList[$row['id']]->addPhone($phone);
        }

        return $studentList;
    }
}