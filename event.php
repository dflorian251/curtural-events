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
        <link rel="stylesheet" href="barcelona/menu.css">


        <!-- <link rel="stylesheet" media="all" href="barcelona/core.css"> -->
        <!-- <link rel="stylesheet" media="all" href="barcelona/css_OIbdenO1m2T6Gl8g0oFZmK7R3OTEWlUSxrnlyc4gTLM.css"> -->

        
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css">
        

        <link rel="stylesheet" media="all" href="barcelona/css_rFRysy6MbVSEpojtuKXhCIczox98m6-B1zLbaxABV_E.css">
        <link rel="stylesheet" media="all" href="barcelona/css_F4e7z303Ny2ifV3z3tSupMhjmCvWXEmfg1ViqTzA3ZA.css">
        <link rel="stylesheet" href="css/post_style.css"> 

        <script src="https://kit.fontawesome.com/c4f6644410.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <header class="header">
        <ul type="none">
            <li class="logo"><a href="main.html">www.corfu.gr</a></li>
            <div>
                <i class="fa-solid fa-earth-europe"></i>
                <select id="languageSelector">
                    <option value="en">Ελληνικά</option>
                    <option value="fr">English</option>
                    <option value="es">Spanish</option>
                    
                </select>
            </div>
            
            <li class="municipality_container"><img src="" id="municipality_logo"></li>
        </ul>
    </header>

    <div id="menu-ciutat-cfu-v1" class="desktop amagat" style="margin-bottom: 4rem;">
        <div id="menu-ciutat-wrapper">
            <ul data-region="menu" class="clearfix level-0">
                <!-- AGGELIES -->
                <li class="menu-1 expanded dropdown">
                    <!-- <div class="icona"><img src="https://www.barcelona.cat/assetsdi/lameva/menu/img/fletxa_1.png"></div> -->
                    <a href="adverts.php" class="dropbtn">ΑΓΓΕΛΙΕΣ</a>
                    <div class="dropdown-content">
                        <p>Ανεβάστε τις δικές σας αγγελίες και μοιραστείτε τις ευκαιρίες, τις υπηρεσίες και τα προϊόντα σας με την κοινότητα!</p>
                    </div>
                </li>
                <!-- EKDHLWSEIS -->
                <li class="menu-2 expanded dropdown">
                    <a href="curtural-events.php">ΕΚΔΗΛΩΣΕΙΣ</a>
                    <div class="dropdown-content">
                        <p>Ανακαλύψτε τις πιο hot εκδηλώσεις του νησιού - Από μουσικά events μέχρι πολιτιστικά φεστιβάλ! Ενημερωθείτε και συμμετέχετε στον παλμό της τοπικής ζωής.</p>
                    </div>
                </li>
                <li class="menu-3 expanded dropdown">
                    <a href="/en/what-to-do-in-cfu">What to do in cfu</a>
                    <div class="dropdown-content">
                        <p>Ανακαλύψτε τις καλύτερες εμπειρίες και δραστηριότητες στο νησί - Συνδεθείτε με την τοπική κουλτούρα και ανακαλύψτε μοναδικά μέρη για να εξερευνήσετε!</p>
                    </div>
                </li>
                <li class="menu-4 expanded dropdown">
                    <a href="/en/discovercfu">Discover cfu</a>
                    <div class="dropdown-content">
                        <p>Ανακαλύψτε τα μυστικά και τις ομορφιές του νησιού - Μια πύλη για να εξερευνήσετε τα πάντα γύρω από την Κέρκυρα!</p>
                    </div>
                </li>
                <li class="menu-5 expanded dropdown">
                    <a href="/en/getinvolved">Get involved</a>
                    <div class="dropdown-content">
                        <p>Ανακαλύψτε τα μυστικά και τις ομορφιές του νησιού - Μια πύλη για να εξερευνήσετε τα πάντα γύρω από την Κέρκυρα!</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
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