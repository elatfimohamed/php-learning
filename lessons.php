<?php
/**
 * Created by PhpStorm.
 * User: elatfi
 * Date: 21/09/18
 * Time: 16:45
 */


require 'models/Lesson.php';
require 'framework/database/connection.php';
require 'framework/database/queryBuilder.php';



$lessons = fetchAll(Connection::connect(), 'lessons');
//
//$statement = $pdo->prepare('SELECT * FROM lessons;');
//$statement->execute();
//$lessons = $statement->fetchAll(PDO::FETCH_CLASS);
//$lessons = fetchAll('lessons');




require 'views/lessons.blade.php';
