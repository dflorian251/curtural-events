<?php
require 'conn.php' ;

$conn = new PDO("mysql:host=$hostname;dbname=$db", $username, $password); 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM advert WHERE advert_id  = $id;";
    $stmt = $conn->prepare($query); 
    // EXECUTING THE QUERY 
    $stmt->execute(); 
    $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    // FETCHING DATA FROM DATABASE 
    $result = $stmt->fetchAll(); 
} 
foreach ($result as $row){ ?>
<!DOCTYPE html>
<html>
    <head>

        <title>Αγγελίες - <?php echo $row["advert_title"]?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="barcelona/menu.css">

        <link rel="stylesheet" href="css/ad.css">

        <link rel="stylesheet" media="all" href="barcelona/css_rFRysy6MbVSEpojtuKXhCIczox98m6-B1zLbaxABV_E.css">
        <link rel="stylesheet" media="all" href="barcelona/css_F4e7z303Ny2ifV3z3tSupMhjmCvWXEmfg1ViqTzA3ZA.css">

        
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

        <div class="ad-container">
            <article class="article ad">
                <time class="ad-date"><?php echo $row["registrationDate"]?></time>
                <h2 class="ad-title">
                    <?php echo $row["advert_title"]?>
                </h2>
                <p class="ad-desc">
                    <?php echo $row["advert_desc"] ?>
                </p>
                <!-- CHECK IF IMAGE IS SUBMITTED -->
                <?php 
                    if (isset($row["advert_image"])) {
                ?>
                <div class="ad-image">
                    <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['advert_image']); ?>">
                </div>
                <?php } ?>
                <p class="ad-contact-info">
                <?php 
                    if ($row["show_contact_info"] == 1) {
                    ?>
                    Phone:
                    <?php
                        echo $row["phone"];
                    } elseif ($row["show_contact_info"] == 2) {
                    ?>
                    Email:
                    <?php
                        echo $row["email"];
                    } else {
                    ?>
                    Phone:
                    <?php
                        echo $row["phone"];
                    ?>
                    <br>
                    Email:
                    <?php
                        echo $row["email"];
                    }
                ?>
                </p>

            </article>
        </div>
        <?php } ?>
        <?php $conn = null ?>
    </body>
</html>