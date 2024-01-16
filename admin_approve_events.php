<?php
// Connect to your MySQL database (replace these values with your actual database credentials)
require 'conn.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Approve Events</title>
    </head>
    <body>
        <h1>Events Approving Portal</h1>
        <form action="admin_operations/approve_event.php" method="post">
            <label for="event_id">Events:</label>
            (id - title - short description - start date - end date)
            <select name="event_id" id="events" required>
    <?php
    try {
        $query = "SELECT * FROM events WHERE events.approved = 0 ;";
        $stmt = $conn->prepare($query); 
        // EXECUTING THE QUERY 
        $stmt->execute(); 
        $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
        // FETCHING DATA FROM DATABASE 
        $result = $stmt->fetchAll();
        // Populate the dropdown with organizer IDs
        foreach ($result as $row){
            echo "<option value=\"{$row['id']}\">{$row['id']} - {$row['title']} - {$row['short_desc']} - {$row['start_date']}  -{$row['end_date']}</option>";
        }
    ?>
            </select>
            <br>
            <input type="hidden" name="_method" value="approve">
            <button type="submit">Approve Event</button>
        </form>
    </body>
    <?php
    } catch(PDOException $e) {
        echo $e->getMessage();
    } 

    $conn = null;
    ?>
</html>