<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

//localhost/mysql_test/create_todo.php
//localhost/mysql_test/read_todo.php
//localhost/mysql_test/update_todo.php
//localhost/mysql_test/delete_todo.php

@require_once ("connect_db.php");
@require_once ("crud_functions.php");

// Create a new Todo item
$title = 'My new Todo item';
$description = 'This is the description of my new Todo item.';
$todoId = createTodo($conn, $title, $description);

// Read all Todo items
$todos = readTodos($conn);

// Update a Todo item
$title = 'My updated Todo item';
updateTodo($conn, $todoId, $title, $description);

// Delete a Todo item
deleteTodo($conn, $todoId);

$conn->close();

?>

