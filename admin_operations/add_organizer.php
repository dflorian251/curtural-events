<?php
// sync date
date_default_timezone_set('Europe/Athens');
// Connect to your MySQL database using PDO (replace these values with your actual database credentials)
require "../conn.php";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $address = $_POST["address"];
        $contact_name = $_POST["contact-name"];
        $contact_surname = $_POST["contact-surname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        try {
            // Count the number of rows in the organizers table
            $query = "SELECT COUNT(id) FROM organizers ";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $count_organizers_id = $stmt->fetchColumn();
            $count_organizers_id++;

            // Insert a new organizer
            $query = $conn->prepare("INSERT INTO `organizers`(`id`, `title`, `address`, `contactName`, `contactSurname`, `email`, `phone`) VALUES (:id, :title, :address, :contactName, :contactSurname, :email, :phone)");
            $query->bindParam(':id', $count_organizers_id);
            $query->bindParam(':title', $title);
            $query->bindParam(':address', $address);
            $query->bindParam(':contactName', $contact_name);
            $query->bindParam(':contactSurname', $contact_surname);
            $query->bindParam(':email', $email);
            $query->bindParam(':phone', $phone);
            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
} catch (PDOException $e) {
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

