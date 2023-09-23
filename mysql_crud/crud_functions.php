<?php

@include_once ("connect_db.php");

// Create Todo
function createTodo(mysqli $conn, string $title, string $description): int
{
    $sql = 'INSERT INTO todos (title, description) VALUES (?, ?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $title, $description);
    $stmt->execute();

    return $conn->insert_id;
}

// Read Todos
function readTodos(mysqli $conn): array
{
    $sql = 'SELECT * FROM todos ORDER BY created_at DESC';
    $result = $conn->query($sql);

    $todos = [];
    while ($row = $result->fetch_assoc()) {
        $todos[] = $row;

        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }

    return $todos;
}


// Update Todos
function updateTodo(mysqli $conn, int $id, string $title, string $description, bool $completed = false): void
{
    $sql = "UPDATE `todos` SET `title`='".$title."',`description`='".$description."' WHERE id = " . $id;
    $conn->query($sql);
}

// Delete Todos
function deleteTodo(mysqli $conn, int $id): void
{
    $sql = 'DELETE FROM todos WHERE id = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
}