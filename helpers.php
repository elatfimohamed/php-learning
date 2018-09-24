<?php
/**
 * Created by PhpStorm.
 * User: elatfi
 * Date: 24/09/18
 * Time: 20:53
 */

function direct($view){

    return "views/$view.blade.php"
}


function direct($uri){

 $routes = [

     '/tasks' => 'controllers/tasks.php',
     '/people' => ' controllers/people.php',
     '/lessons ' => 'controllers/lessons.php',
     '/about' => 'controllers/about.php',
     '/contact' => 'controllers/contact.php'

 ];




 if (array_key_exists($uri,$routes)) {
     return $routes[$uri];

 }else{



     new Exception('La pagina web que demaneu no existeix ');
 }



}