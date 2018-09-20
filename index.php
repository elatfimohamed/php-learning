<?php

//
//var_dump($_GET['greeting']);
//die();

//$_GET -> array
//dd($asdasd)

//String -> $greeting='Hola';
//Booleans -> $x = true/false;
//Enters -> $num = 15;

//Array/Vector

//$fruites = array();
//$fruites = [];
//
// Normal array
//$platan = 'platan';
//$presec = 'prèsec';
//$taronja = 'taronja';
//$fruites = [$platan, $presec, $$taronja] ;
//
//echo $fruites[0];
//die()

// Array associatiu

//$person="Sergi Tur Badenas";

//$person = [
//    'name' => 'Sergi Tur Badenas',
//    'dni' => '14268078K'
//    'mobile' => '67845712'
//    //'email'
//]

require 'functions.php';

$greeting= hello($_GET['greeting']);

require 'views/index.blade.php';