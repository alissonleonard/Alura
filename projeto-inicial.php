<?php

use Alura\src\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Alisson Leonardo',
    new \DateTimeImmutable('1998-12-10')
);

echo $student->age();
