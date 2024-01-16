<?php
// Connect to your MySQL database (replace these values with your actual database credentials)
require "conn.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Category</title>
</head>
<body>
    <h1>Add New Category</h1>
    <form action="admin_operations/add_category.php" method="post">
        <label for="name">Category Name:</label>
        <input type="text" id="name" name="name" required><br>

        <input type="submit" value="Add Category">
    </form>
<?php
    // Close the database connection
    $conn = null;
?>
</body>
</html>
