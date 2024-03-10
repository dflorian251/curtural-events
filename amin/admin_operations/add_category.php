<?php
// sync date
date_default_timezone_set('Europe/Athens');
// Connect to your MySQL database using PDO (replace these values with your actual database credentials)
require "../../conn.php";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];

        try {

            $query = "SELECT COUNT(id) FROM categories ";
            $stmt = $conn->prepare($query); 
            // EXECUTING THE QUERY 
            $stmt->execute(); 
            $count_categories_id = $stmt->fetchColumn();
            $count_categories_id++;
    
            $query = $conn->prepare("INSERT INTO `categories`(`id`, `name`) VALUES (:id,:name)");
            $query->bindParam(':id', $count_categories_id);
            $query->bindParam(':name', $name);
            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Handle form submission
echo "Category added successfully!";
?>
<br>
<a href="../index.html">Main page</a>
<?php
$conn = null;
?>
