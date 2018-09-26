<?php

//require 'models/Lesson.php';

//$pdo = connect();
//
//$statement = $pdo->prepare('SELECT * FROM lessons;');
//$statement->execute();
//$lessons = $statement->fetchAll(PDO::FETCH_CLASS);
//
//$lessons = fetchAll('lessons');

$lessons =  [];


require 'app/views/lessons.blade.php';

// WET -> DRY