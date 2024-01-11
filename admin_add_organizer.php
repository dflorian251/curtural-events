<?php
// Connect to your MySQL database (replace these values with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "curtural_events";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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
        <label for="title">Organizer Title:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>

        <label for="contactName">Contact Name:</label>
        <input type="text" id="contactName" name="contactName" required><br>

        <label for="contactSurname">Contact Surname:</label>
        <input type="text" id="contactSurname" name="contactSurname" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br>

        <input type="submit" value="Add Organizer">
    </form>
<?php
    // Close the database connection
    mysqli_close($conn);
?>
</body>
</html>
