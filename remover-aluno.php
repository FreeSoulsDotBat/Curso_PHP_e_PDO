<?php

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:'. $databasePath);

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = :id;');
$preparedStatement->bindValue(':id', 1, PDO::PARAM_INT);
var_dump($preparedStatement->execute());