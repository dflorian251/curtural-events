<?php
//sync date
date_default_timezone_set('Europe/Athens');
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


try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $eventId = $_POST['event_id'];
    
        try {
            $query = "SELECT COUNT(id) FROM events ";
            $stmt = $conn->prepare($query); 
            // EXECUTING THE QUERY 
            $stmt->execute(); 
            $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            // FETCHING DATA FROM DATABASE 
            $result = $stmt->fetchAll();
            foreach ($result as $row){
                $count_events_id = $row['COUNT(id)'];
            }
    
            $query = $conn->prepare("UPDATE `events` SET `approved`= 1 WHERE events.id = $eventId");
            
    
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
