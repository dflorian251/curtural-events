<?php
// Connect to your MySQL database (replace these values with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curtural_events";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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
    mysqli_close($conn);
?>
</body>
</html>
