<?php
// addBook.php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $isbn = $_POST['isbn'];
    $category = $_POST['category'];
    $codeNoFrom = $_POST['codeNoFrom'];
    $codeNoTo = $_POST['codeNoTo'];

    $stmt = $conn->prepare("INSERT INTO books (title, author, isbn, category_id, code_no_from, code_no_to) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiss", $title, $author, $isbn, $category, $codeNoFrom, $codeNoTo);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
