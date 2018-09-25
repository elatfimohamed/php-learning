
<?php

$tasks = Task::all();
require view('tasks',$tasks);

//require 'views/task.blade.php';

