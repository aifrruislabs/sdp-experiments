<?php

@require_once ("connect_db.php");
@require_once ("crud_functions.php");

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

//http://localhost/mysql_test/update_todo.php

$todoId = 1;

// Update a Todo item
$title = 'My new Todo item';
$description = 'This is the description of my new Todo item.';
updateTodo($conn, $todoId, $title, $description);