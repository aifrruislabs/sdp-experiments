<?php

//http://localhost/mysql_test/create_todo.php

@require_once ("connect_db.php");
@require_once ("crud_functions.php");

// Create a new Todo item
$title = 'My new Todo item';
$description = 'This is the description of my new Todo item.';
$todoId = createTodo($conn, $title, $description);

print ("Created New Todo");