<?php

//http://localhost/mysql_test/delete_todo.php

@require_once ("connect_db.php");
@require_once ("crud_functions.php");

$todoId = 1;

// Delete a Todo item
deleteTodo($conn, $todoId);

print ("Deleted Todo");