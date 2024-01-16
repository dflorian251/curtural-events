<?php
// sync date
date_default_timezone_set('Europe/Athens');
// Connect to your MySQL database using PDO (replace these values with your actual database credentials)
require "../conn.php";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $eventId = $_POST['event_id'];
    
        try {
            // Count the number of rows in the events table
            $query = "SELECT COUNT(id) FROM events ";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $count_events_id = $stmt->fetchColumn();
    
            // Update the event with the specified ID
            $query = $conn->prepare("UPDATE `events` SET `approved`= 1 WHERE events.id = :eventId");
            $query->bindParam(':eventId', $eventId);
            $query->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        } 
    }
}  catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Handle form submission
echo "Event approved successfully!";
?>
<br>
<a href="../admin.html">Main page</a>
<?php 
$conn = null;
?>
