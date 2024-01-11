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

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idToDelete = $_REQUEST['event_id'];
        try {
            $query = "DELETE FROM events WHERE `events`.`id` = $idToDelete";
            $stmt = $conn->prepare($query); 
            // EXECUTING THE QUERY 
            $stmt->execute(); 
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
    } 
    echo "Event deleted successfully!";
    ?>
    <br>
    <a href="../admin.html">Main page</a>
<?php 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>