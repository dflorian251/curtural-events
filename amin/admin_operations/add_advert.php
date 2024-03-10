<?php
// sync date
date_default_timezone_set('Europe/Athens');
// Connect to your MySQL database using PDO (replace these values with your actual database credentials)
require '../../conn.php';

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $advert_title = $_POST["advert_title"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $show_contact_info = $_POST["show_contact_info"];
        $advert_desc = $_POST["advert_desc"];
        $tag_id = $_POST["tag_id"];
        // REGISTRATION DATE         $registation_date = date("Y-m-d");
        // Check if an image was uploaded
        if (isset($_FILES["image"]) && $_FILES["image"]["size"] > 0) {
            // Read image content
            $image = file_get_contents($_FILES["image"]["tmp_name"]);
        } else {
            // If no image uploaded, set image as NULL
            $image = null;
        }
        

        try {
            // Count the number of rows in the events table
            $query = "SELECT MAX(advert_id ) FROM advert ";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $count_adverts_id = $stmt->fetchColumn();

            // Insert a new event
            $query = $conn->prepare("INSERT INTO `advert`(`advert_id`, `advert_title`, `email`, `phone`, `show_contact_info`, `advert_desc`, `tag_id`, `advert_image`, `registrationDate`, `approved`) VALUES (:advert_id, :advert_title, :email, :phone, :show_contact_info, :advert_desc, :tag_id, :image, CURRENT_TIMESTAMP, 0)");

            $count_adverts_id = $count_adverts_id + 1;

            $query->bindParam(':advert_id', $count_adverts_id);
            $query->bindParam(':advert_title', $advert_title);;
            $query->bindParam(':email', $email);
            $query->bindParam(':phone', $phone);
            $query->bindParam(':show_contact_info', $show_contact_info);
            $query->bindParam(':advert_desc', $advert_desc);
            $query->bindParam(':tag_id', $tag_id);
            $query->bindParam(':image', $image);

            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        } 
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Handle form submission
echo "Advert posted successfully!";
?>
<br>
<a href="../index.html">Main page</a>
<?php 
$conn = null;
?>
