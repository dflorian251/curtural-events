<?php 
// Connect to your MySQL database using PDO (replace these values with your actual database credentials)
require '../conn.php';

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idToDelete = $_REQUEST['organizer_id'];

        try {
            // Delete the organizer with the specified ID
            $query = $conn->prepare("DELETE FROM organizers WHERE `organizers`.`id` = :idToDelete");
            $query->bindParam(':idToDelete', $idToDelete);
            $query->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }

        echo "Organizer deleted successfully!";
    }
    ?>
    <br>
    <a href="../admin.html">Main page</a>
<?php 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
