<?php 
// Connect to your MySQL database using PDO (replace these values with your actual database credentials)
require "../conn.php" ;

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idToDelete = $_REQUEST['category_id'];
        
        try {
            // Delete the category with the specified ID
            $query = $conn->prepare("DELETE FROM categories WHERE `categories`.`id` = :idToDelete");
            $query->bindParam(':idToDelete', $idToDelete);
            $query->execute();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }
        
        echo "Category deleted successfully!";
    }

    ?>
    <br>
    <a href="../admin.html">Main page</a>
<?php 
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
