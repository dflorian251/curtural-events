<?php
// Connect to your MySQL database using PDO (replace these values with your actual database credentials)
require "conn.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Get form data
        $title = $_POST["title"];
        $address = $_POST["address"];
        $contactName = $_POST["contactName"];
        $contactSurname = $_POST["contactSurname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        // Prepare and execute the SQL statement
        $query = $conn->prepare("INSERT INTO organizers (`title`, `address`, `contactName`, `contactSurname`, `email`, `phone`) VALUES (:title, :address, :contactName, :contactSurname, :email, :phone)");
        
        $query->bindParam(':title', $title);
        $query->bindParam(':address', $address);
        $query->bindParam(':contactName', $contactName);
        $query->bindParam(':contactSurname', $contactSurname);
        $query->bindParam(':email', $email);
        $query->bindParam(':phone', $phone);

        $query->execute();
        
        echo "Organizer added successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// Close the database connection
$conn = null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Organizer</title>
</head>
<body>
    <h1>Add New Organizer</h1>
    <form action="admin_operations/add_organizer.php" method="post">
        <!-- Your form fields here -->
        <label for="name">Organizer Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="name">Organizer Address:</label>
        <input type="text" id="address" name="address" required><br>

        <label for="name">Organizer Contact Name:</label>
        <input type="text" id="contact-name" name="contact-name" required><br>

        <label for="name">Organizer Contact Surname:</label>
        <input type="text" id="contact-surname" name="contact-surname" required><br>

        <label for="name">Organizer Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="name">Organizer Phone:</label>
        <input type="tel" id="phone" name="phone" required><br>

        <input type="submit" value="Add Organizer">
    </form>
</body>
</html>
