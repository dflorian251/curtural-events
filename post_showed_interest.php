<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/show_interest_style.css">
    </head>
    <body>
        <?php 
            //sync date
            date_default_timezone_set('Europe/Athens');

            require 'conn.php' ;

            if (isset($_GET['id'])) {
                $event_id = $_GET['id'];
            }

            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $firstname = $_POST["firstname"];
                $lastname = $_POST["lastname"];
                $phone = $_POST["phone"];
                $email = $_POST["email"];
                $description = $_POST["description"];
                $today = date("Y-m-d");

                try{
                    $conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 


                    $query = "SELECT COUNT(id) FROM participant ";
                    $stmt = $conn->prepare($query); 
                    // EXECUTING THE QUERY 
                    $stmt->execute(); 
                    $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                    // FETCHING DATA FROM DATABASE 
                    $result = $stmt->fetchAll();
                    foreach ($result as $row){
                        $count_participant_id = $row['COUNT(id)'];
                    }



                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    // For participant table
                    $query = $conn->prepare("INSERT INTO `participant`(`id`, `surname`, `name`, `phone`, `email`, `description`) VALUES ($count_participant_id+1,'$lastname','$firstname','$phone','$email','$description');" );
                    $query->execute();
                    // For participating_events table
                    $query = $conn->prepare("INSERT INTO `participating_events`(`participantID`, `eventID`, `date`) VALUES (:participant_id, :event_id, :today)");
                    $count_participant_id ++;
                    $query->bindParam(':participant_id', $count_participant_id);
                    $query->bindParam(':event_id', $event_id);
                    $query->bindParam(':today', $today);
                    $query->execute();


                    
                    ?>
                    <div class="redirect">
                        <h2 class="title">Η φόρμα συμπληρώθηκε επιτυχώς! Ευχαριστούμε για το ενδιαφέρον σας</h2>
                        <a href="main.php" class="subtitle">Αρχική σελίδα</a>
                    </div>

                  
                <?php
                }catch(PDOException $e){
                    echo $e->getMessage();
                }
            }

            $conn = null;
        ?>
    </body>
</html>