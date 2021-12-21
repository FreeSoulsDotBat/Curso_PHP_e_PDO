<?php

require_once 'vendor/autoload.php';

$pdo = Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = :id;');
$preparedStatement->bindValue(':id', 1, PDO::PARAM_INT);
var_dump($preparedStatement->execute());