<?php
require 'conn.php' ;

$conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM events WHERE id = $id;";
    $stmt = $conn->prepare($query); 
    // EXECUTING THE QUERY 
    $stmt->execute(); 
    $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    // FETCHING DATA FROM DATABASE 
    $result = $stmt->fetchAll(); 
} 
?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/post_style.css">   
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c4f6644410.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php foreach ($result as $row){ ?>
        <article>
            <div class="post-header">
                <h2 class="post-title"><?php echo $row['title'];?></h2>
                <a class="event-location" href="#" target="_blank"><?php echo $row['location']?></a>
                <p class="event-date"><span class="fa-solid fa-calendar fa-icon"></span>
                From
                <?php 
                $databaseDate = DateTime::createFromFormat('Y-m-d', $row['start_date']);
                $start_date = $databaseDate->format('d/m/Y');
                echo str_replace('-','/',$start_date)
                ?> 
                to 
                <?php 
                $databaseDate = DateTime::createFromFormat('Y-m-d', $row['end_date']);
                $end_date = $databaseDate->format('d/m/Y');
                echo str_replace('-','/',$end_date)?>
                </p>
            </div>
            <div class="post-body">
                <div class="post-content">
                    <div class="post-image">
                        <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>">
                    </div>
                    <p class="post-short-desc"><strong><?php echo $row['keyword'] ?>.</strong><?php echo $row['short_desc']?></p>
                    <p class="post-long-desc">
                        <?php
                            echo nl2br($row['long_desc']); 
                        ?>
                    </p>
                </div>
                <div class="event-info">
                    <div class="event-info-details">
                        <img alt="phone-icon" src="pics/phone-icon.png">
                        <div class="phone">
                            <dt>Phone number</dt>
                            <dd>Tel.: <?php echo $row['phone']?></dd>
                        </div>
                    </div>
                    <div class="event-info-map">
                        <iframe src="https://maps.google.com/maps?q=<?php echo $row['latitude']?>,<?php  echo $row['longitude']?>&hl=gr&z=14&amp;output=embed" width="310" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="location-details">
                            <p><?php echo $row['location']?></p>
                            <span>Address: </span><?php echo $row['address']?><br>
                            <span>Districte: </span>Ciutat Vella<br>
                            <span>Neighborhood: </span>Sant Pere, Santa Caterina i la Ribera
                        </div>
                    </div>
                </div>
            </div>
            <a target="_blank" href="./show_interest.php?id=<?=$row['id']?>"><button>Ενδιαφέρομαι</button></a>
            
        </article>

    <?php } ?>
    <?php $conn = null ?>
    </body>

</html>