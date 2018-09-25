<?php

function view($view) {
    return "views/$view.blade.php";
}

function direct($uri) {

    // routes.php
    $routes = [
        '/' => 'controllers/tasks.php',
        '/tasks' => 'controllers/tasks.php',
        '/people' => 'controllers/people.php',
        '/lessons' => 'controllers/lessons.php',
        '/about' => 'controllers/about.php',
        '/contact' => 'controllers/contact.php'
    ];
    // Route::define('tasks', 'controllers/tasks.php')
    if (array_key_exists($uri,$routes)) {
        return $routes[$uri];
    } else {
        new Exception('La pàgina que demaneu no existeix');
    }
}