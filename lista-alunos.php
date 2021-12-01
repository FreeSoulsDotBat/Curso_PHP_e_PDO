<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:'. $caminhoBanco);

$statement = $pdo->query('SELECT * FROM students;');
$studentListData = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentListData as $studentData) {

    $studentList[] = new Student($studentData['id'], $studentData['name'], new \DateTimeImmutable($studentData['birth_date']));

}

var_dump($studentList);