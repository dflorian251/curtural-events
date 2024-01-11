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
        $title = $_POST["title"];
        $address = $_POST["address"];
        $contact_name = $_POST["contactName"];
        $contact_surname = $_POST["contactSurname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        try {
            $query = "SELECT COUNT(id) FROM organizers ";
            $stmt = $conn->prepare($query); 
            // EXECUTING THE QUERY 
            $stmt->execute(); 
            $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            // FETCHING DATA FROM DATABASE 
            $result = $stmt->fetchAll();
            foreach ($result as $row){
                $count_organizers_id = $row['COUNT(id)'];
            }
    
            $query = $conn->prepare("INSERT INTO `organizers`(`id`, `title`, `address`, `contactName`, `contactSurname`, `email`, `phone`) VALUES ($count_organizers_id+1,'$title','$address]','$contact_name','$contact_surname','$email','$phone]')");
            $query->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        } 
    }
}  catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// Handle form submission
 
    echo "Organizer added successfully!";
?>
    <br>
    <a href="../admin.html">Main page</a>
<?php 
$conn = null;
?>
