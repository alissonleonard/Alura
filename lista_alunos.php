<?php
use Alura\src\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pbo = new PDO( 'sqlite:' . $databasePath);

$statement = $pbo->query('SELECT * FROM students;');
$studentList = $statement->fetchAll( PDO::FETCH_ASSOC);

foreach ($studentDataList as $studentData) {
    $studentList[] = new Student(
        $studentData['id'], 
        $studentData[$name], 
        new \DateTimeImmutable ($studentData['birth_date'])
        );
    }

var_dump($studentList);

