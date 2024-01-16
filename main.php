<?php
require 'conn.php' ;

$query = "SELECT * FROM events WHERE events.approved = 1;";

$stmt = $conn->prepare($query); 
// EXECUTING THE QUERY 
$stmt->execute(); 
$r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
// FETCHING DATA FROM DATABASE 
$result = $stmt->fetchAll(); 
?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <main class="main">
        <?php
        $articlesPerRow = 3;
        $articleCount = 0;
        ?>
            <!-- <div class="post-row"> -->
            <?php foreach ($result as $row){ 
                
                if ($articleCount % $articlesPerRow === 0) {
                    // Start a new post-row after every three articles
                    echo '<div class="post-row">';
                }
            ?>
                <article>
                    <div class="post-image">
                        <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"/>
                    </div>
                    <div class="post-info">
                        <a class="post-title" href="post.php?id=<?=$row['id']?>"><?php echo $row["title"];?></a>
                        <p class="post-short-desc"><span><?php echo $row["keyword"]?>.</span><?php echo $row['short_desc'] ?></p>
                        <ul>
                            <li><span class="event-date">When:</span> <?php echo $row['start_date']?> - <?php echo $row['end_date'] ?></li>
                            <li><span class="event-location">Where:</span> <?php echo $row['location']?> </li>
                        </ul>
                    </div>
                </article>
            
        <?php 
            $articleCount++;

            if ($articleCount % $articlesPerRow === 0 || $articleCount === count($result)) {
                // Close the post-row after every three articles or at the end of the loop
                echo '</div>';
            }
        }
        ?>
        </main>

    <?php $conn = null ?>
    </body>
</html>