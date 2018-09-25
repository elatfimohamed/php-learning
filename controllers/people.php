<?php

$pdo = connect();
$people = fetchAll($pdo,'people');
require 'views/people.blade.php';