<?php

//http://localhost/mysql_test/read_todo.php

@require_once ("connect_db.php");
@require_once ("crud_functions.php");

// Read all Todo items
$todos = readTodos($conn);