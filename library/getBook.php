<?php
// getBooks.php

include 'db.php';

$sql = "SELECT books.title, books.author, books.isbn, categories.category_name, books.code_no_from, books.code_no_to 
        FROM books 
        JOIN categories ON books.category_id = categories.category_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>".$row['title']." by ".$row['author']." - ISBN: ".$row['isbn']." - Category: ".$row['category_name']." - Code: ".$row['code_no_from']." to ".$row['code_no_to']."</li>";
    }
} else {
    echo "<li>No books available</li>";
}

$conn->close();
?>
