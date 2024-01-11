<?php
// Connect to your MySQL database (replace these values with your actual database credentials)
$hostname = "localhost";
$username = "root";
$password = "";
$db = "curtural_events";

$conn = mysqli_connect($hostname, $username, $password, $db); 

if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); 
} 

$conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Deleting Page</title>
</head>
<body>
    <h1>Event Deleting</h1>
    <form action="admin_operations/delete_event.php" method="post">
        <label for="event_id">Events:</label>
        (id - title - registration date)
        <select name="event_id" id="events" required>
<?php
try {
    $query = "SELECT * FROM events;";
    $stmt = $conn->prepare($query); 
    // EXECUTING THE QUERY 
    $stmt->execute(); 
    $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    // FETCHING DATA FROM DATABASE 
    $result = $stmt->fetchAll();
    // Populate the dropdown with organizer IDs
    foreach ($result as $row){
        echo "<option value=\"{$row['id']}\">{$row['id']} - {$row['title']} - {$row['registrationDate']}</option>";
    }
?>
        </select>
        <br>
        <input type="hidden" name="_method" value="delete">
        <button type="submit">Delete Event</button>
    </form>
<?php
} catch(PDOException $e) {
    echo $e->getMessage();
} 

$conn = null;
?>
