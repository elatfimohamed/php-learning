<?php

require 'models/Task.php';


//require 'models/Task.php';
//
//new Task();
//
////new PDO()
///

//$task1= [ 'name' => 'Comprar pa', 'completed' => false ];
//$task2= [ 'name' => 'Comprar llet', 'completed' => false ];
//$task3= [ 'name' => 'fer llit pa', 'completed' => true ];
//
//$tasks = [$task1, $task2, $task3];


//Conexio a la BD

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=php-learning','debian-sys-maint','73ljBdLD9Yiztk1I');
} catch (\PDOException $e) {
    die('Could not connect: ' . $e);
}

// CONUSLTA SQL -> STATEMENT SQL


$statement = $pdo->prepare( 'SELECT * FROM task');
$statement->execute();
$tasks = $statement->fetchAll( PDO::FETCH_CLASS);

$tasks = [
    new Task( 'comprar pa ', false),
    new Task( 'comprar llet', true),
    new Task( 'Fer el llit ', false)

];

require 'views/task.blade.php';

