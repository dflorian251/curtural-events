<?php
// Connect to your MySQL database (replace these values with your actual database credentials)

require 'conn.php' ;
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting Organizer Page</title>
</head>
<body>
    <h1>Delete Organizer</h1>
    <form action="admin_operations/delete_organizer.php" method="post">
        <label for="organizer_id">Organizers:</label>
        (id - title - contact name - contact surname)
        <select name="organizer_id" id="organizers" required>
<?php
try {
    $query = "SELECT * FROM organizers;";
    $stmt = $conn->prepare($query); 
    // EXECUTING THE QUERY 
    $stmt->execute(); 
    $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    // FETCHING DATA FROM DATABASE 
    $result = $stmt->fetchAll();
    // Populate the dropdown with organizer IDs
    foreach ($result as $row){
        echo "<option value=\"{$row['id']}\">{$row['id']} - {$row['title']} - {$row['contactName']} - {$row['contactSurname']}</option>";
    }
?>
        </select>
        <br>
        <input type="hidden" name="_method" value="delete">
        <button type="submit">Delete Organizer</button>
    </form>
<?php
} catch(PDOException $e) {
    echo $e->getMessage();
} 

$conn = null;
?>
