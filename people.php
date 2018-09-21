<?php


require 'models/People.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php-learning','debian-sys-maint','73ljBdLD9Yiztk1I');
} catch (\PDOException $e) {
    die('Could not connect: ' . $e);

}

$statement = $pdo->prepare('SELECT * FROM people;');
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_CLASS);


require 'views/people.blade.php';