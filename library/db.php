<?php
// db.php

$host = 'localhost';
$user = 'root';
$password = 'yourpassword';  // replace with your MySQL root password
$database = 'LibraryManagement';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
