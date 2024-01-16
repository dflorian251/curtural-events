<?php
require 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Posting Page</title>
</head>
<body>
    <h1>Event Posting</h1>
    <form action="admin_operations/post_event.php" method="post" enctype="multipart/form-data">
        <!-- Fields for Event Information -->
        <label for="title">Event Title:</label>
        <input type="text" name="title" required><br>

        <label for="short_desc">Short Description:</label>
        <input type="text" name="short_desc" required><br>

        <label for="long_desc">Long Description:</label>
        <textarea name="long_desc" rows="4" required></textarea><br>
        
        <label for="location">Event Location:</label>
        <input type="text" name="location" required><br>

        <label for="keyword">Keyword:</label>
        <input type="text" name="keyword" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="longitude">Longitude:</label>
        <input type="text" name="longitude" required><br>

        <label for="latitude">Latitude:</label>
        <input type="text" name="latitude" required><br>

        <label for="date">Start Date:</label>
        <input type="date" name="start_date" required><br>

        <label for="date">End Date:</label>
        <input type="date" name="end_date" required><br>

        <label for="url">URL:</label>
        <input type="text" name="url" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="phone" name="phone" required><br>

        <label for="organizer_id">Organizer ID:</label>
        (id - title)
        <select name="organizer_id" id="organizer" required>
        <?php
            $query = "SELECT * FROM organizers";
            $stmt = $conn->prepare($query); 
            // EXECUTING THE QUERY 
            $stmt->execute(); 
            $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            // FETCHING DATA FROM DATABASE 
            $result = $stmt->fetchAll();
            // Populate the dropdown with organizer IDs
            foreach ($result as $row){
                echo "<option value=\"{$row['id']}\">{$row['id']} - {$row['title']}</option>";
            }
        ?>
        </select>
        <br>

        <label for="category_id">Category ID:</label>
        (id - name)
        <select name="category_id" id="category" required>
        <?php
            echo 'Ola pane kala';
            // Fetch existing organizer IDs from the database
            $query = "SELECT * FROM categories";
            $stmt = $conn->prepare($query); 
            // EXECUTING THE QUERY 
            $stmt->execute(); 
            $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
            // FETCHING DATA FROM DATABASE 
            $result = $stmt->fetchAll();
            // Populate the dropdown with organizer IDs
            foreach ($result as $row){
                echo "<option value=\"{$row['id']}\">{$row['id']} - {$row['name']}</option>";
            }
        ?>
        </select>
        <br>

        <label for="image">Event Image:</label>
        <input type="file" name="image" accept="image/*" required><br>

        <input type="submit" value="Post Event">
    </form>

<?php
    // Close the database connection
    $conn = null;
?>
</body>
</html>
