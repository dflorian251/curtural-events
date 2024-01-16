<?php
// Connect to your MySQL database (replace these values with your actual database credentials)
require 'conn.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting Category Page</title>
</head>
<body>
    <h1>Delete Category</h1>
    <form action="admin_operations/delete_category.php" method="post">
        <label for="category_id">Categories:</label>
        (id - name)
        <select name="category_id" id="categories" required>
<?php
try {
    $query = "SELECT * FROM categories;";
    $stmt = $conn->prepare($query); 
    // EXECUTING THE QUERY 
    $stmt->execute(); 
    $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    // FETCHING DATA FROM DATABASE 
    $result = $stmt->fetchAll();
    // Populate the dropdown with organizer IDs
    foreach ($result as $row){
        echo "<option value=\"{$row['id']}\">{$row['id']} - {$row['name']}</option>";
    }
?>
        </select>
        <br>
        <input type="hidden" name="_method" value="delete">
        <button type="submit">Delete Category</button>
    </form>
<?php
} catch(PDOException $e) {
    echo $e->getMessage();
} 

$conn = null;
?>
</body>