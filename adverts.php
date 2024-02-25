<?php
require 'conn.php' ;

$query = "SELECT * FROM advert;";

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
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="barcelona/menu.css">

        <link rel="stylesheet" href="css/adverts.css">

        <link rel="stylesheet" media="all" href="barcelona/css_rFRysy6MbVSEpojtuKXhCIczox98m6-B1zLbaxABV_E.css">
        <link rel="stylesheet" media="all" href="barcelona/css_F4e7z303Ny2ifV3z3tSupMhjmCvWXEmfg1ViqTzA3ZA.css">


        <link rel="stylesheet" href="css/advert_options_container.css">

        
        <script src="https://kit.fontawesome.com/c4f6644410.js" crossorigin="anonymous"></script>

        <title>Αγγελίες</title>
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
                        <a href="#" class="dropbtn">ΑΓΓΕΛΙΕΣ</a>
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

        <div id="menu-ciutat-cfu-v1" class="desktop amagat adverts-options-container" style="margin-bottom: 4rem;">
            <div id="menu-ciutat-wrapper">
                <ul class="clearfix level-0 adverts-options" style="width: 50%; margin: auto;">
                    <li class="menu-1 expanded ">
                        <a href="adverts_operations/register_ad.html">ΚΑΤΑΧΩΡΗΣΗ ΑΓΓΕΛΙΑΣ</a>
                    </li>
                    <li class="menu-1 expanded ">
                        <a href="#">ΕΠΕΞΕΡΓΑΣΙΑ ΑΓΓΕΛΙΑΣ</a>
                    </li>
                    <li class="menu-1 expanded ">
                        <a href="#">ΔΙΑΓΡΑΦΗ ΑΓΓΕΛΙΑΣ</a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="container adverts-events-portal adverts-events-portal-bloc-3 adverts-container">
            <h2>Αγγελίες</h2>
            <ul class="row adverts">
                <?php foreach ($result as $row){ ?>
                <li class="advert">
                    <article class="in-article-card" id="mini-post-21059">
                        <time>
                            <?php
                            $databaseDate = DateTime::createFromFormat('Y-m-d', $row['registrationDate']);
                            $start_date = $databaseDate->format('d/m/Y');
                            echo str_replace('-','/',$start_date);
                            ?>
                        </time>
                        <h3>
                            <a href="ad.php?id=<?=$row['advert_id']?>" class="ad-title">
                                <?php echo $row["advert_title"]?>
                            </a>
                        </h3>
                        <div class="tags">
                            <a href="#" rel="tag" class="tag">
                                <?php 
                                $tagID = $row["tag_id"];
                                $query = "SELECT * FROM tag WHERE id = $tagID";

                                $stmt = $conn->prepare($query); 
                                // EXECUTING THE QUERY 
                                $stmt->execute(); 
                                $r = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
                                // FETCHING DATA FROM DATABASE 
                                $result_tag = $stmt->fetchAll(); 
                                foreach ($result_tag as $row_tag) {
                                    echo $row_tag["name"];
                                }
                                ?>
                            </a>
                               
                        </div>
                    </article>
                <?php }?>
                </li>
            </ul>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>