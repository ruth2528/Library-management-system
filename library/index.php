<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Book Entry Form -->
    <div class="form-container">
        <h2>Add New Book</h2>
        <form action="addBook.php" method="POST" id="addBookForm">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>

            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn" required>

            <label for="category">Category:</label>
            <select id="category" name="category" required>
                <?php
                include 'db.php';
                $result = $conn->query("SELECT * FROM categories");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='".$row['category_id']."'>".$row['category_name']."</option>";
                }
                ?>
            </select>

            <label for="codeNoFrom">Code No From:</label>
            <input type="text" id="codeNoFrom" name="codeNoFrom" required>

            <label for="codeNoTo">Code No To:</label>
            <input type="text" id="codeNoTo" name="codeNoTo" required>

            <button type="submit">Add Book</button>
        </form>
    </div>

    <!-- Display Books -->
    <div id="booksList">
        <h2>Book List</h2>
        <ul id="bookEntries">
            <?php include 'getBooks.php'; ?>
        </ul>
    </div>

</body>
</html>
