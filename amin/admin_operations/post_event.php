<?php
// sync date
date_default_timezone_set('Europe/Athens');
// Connect to your MySQL database using PDO (replace these values with your actual database credentials)
require '../../conn.php';

try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST["title"];
        $short_desc = $_POST["short_desc"];
        $long_desc = $_POST["long_desc"];
        $location = $_POST["location"];
        $keyword = $_POST["keyword"];
        $address = $_POST["address"];
        $longitude = $_POST["longitude"];
        $latitude = $_POST["latitude"];
        $start_date = $_POST["start_date"];
        $end_date = $_POST["end_date"];
        $url = $_POST["url"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $organizer_id = $_POST["organizer_id"];
        $category_id = $_POST["category_id"];
        $registation_date = date("Y-m-d");
        // Upload image
        $image = file_get_contents($_FILES["image"]["tmp_name"]);

        try {
            // Count the number of rows in the events table
            $query = "SELECT MAX(id) FROM events ";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $count_events_id = $stmt->fetchColumn();

            // Insert a new event
            $query = $conn->prepare("INSERT INTO events (`id`, `title`, `short_desc`, `long_desc`, `location`, `keyword`, `address`, `longitude`, `latitude`, `start_date`, `end_date`, `image`, `url`, `email`, `phone`, `approved`, `registrationDate`, `updateDate`, `organizer_id`, `category_id`) VALUES (:id, :title, :short_desc, :long_desc, :location, :keyword, :address, :longitude, :latitude, :start_date, :end_date, :image, :url, :email, :phone, 0, CURRENT_TIMESTAMP, NULL, :organizer_id, :category_id)");

            $count_events_id = $count_events_id + 1;

            $query->bindParam(':id', $count_events_id);
            $query->bindParam(':title', $title);
            $query->bindParam(':short_desc', $short_desc);
            $query->bindParam(':long_desc', $long_desc);
            $query->bindParam(':location', $location);
            $query->bindParam(':keyword', $keyword);
            $query->bindParam(':address', $address);
            $query->bindParam(':longitude', $longitude);
            $query->bindParam(':latitude', $latitude);
            $query->bindParam(':start_date', $start_date);
            $query->bindParam(':end_date', $end_date);
            $query->bindParam(':image', $image);
            $query->bindParam(':url', $url);
            $query->bindParam(':email', $email);
            $query->bindParam(':phone', $phone);
            $query->bindParam(':organizer_id', $organizer_id);
            $query->bindParam(':category_id', $category_id);

            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        } 
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// Handle form submission
echo "Event posted successfully!";
?>
<br>
<a href="../index.html">Main page</a>
<?php 
$conn = null;
?>
