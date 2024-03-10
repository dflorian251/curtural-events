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
<html lang="gr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
   

        <link rel="stylesheet" href="barcelona/menu.css">


        <!-- <link rel="stylesheet" media="all" href="barcelona/core.css"> -->
        <!-- <link rel="stylesheet" media="all" href="barcelona/css_OIbdenO1m2T6Gl8g0oFZmK7R3OTEWlUSxrnlyc4gTLM.css"> -->

        
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/responsive_header.css">
        <link rel="stylesheet" href="css/responsive_menu.css">
        

        <link rel="stylesheet" media="all" href="barcelona/css_rFRysy6MbVSEpojtuKXhCIczox98m6-B1zLbaxABV_E.css">
        <link rel="stylesheet" media="all" href="barcelona/css_F4e7z303Ny2ifV3z3tSupMhjmCvWXEmfg1ViqTzA3ZA.css">

        <script src="https://kit.fontawesome.com/c4f6644410.js" crossorigin="anonymous"></script>



        <!-- <link rel="stylesheet" media="all" href="barcelona/menu.css"> -->
        <!-- <link rel="stylesheet" media="all" href="barcelona/cfu-icon.css"> -->
        <!-- <link rel="stylesheet" media="all" href="barcelona/css_-WFyFrRhz7gOEOtU4cPaRSXptKD8eZiQbGzfRfjoDl4.css"> -->
        
        <!-- <script type="text/javascript" src="barcelona/uc.js" id="Cookiebot" data-blockingmode="auto" data-culture="EN" data-cbid="be63ba2d-fd22-4804-8cc6-1c81f5fbadba"></script> -->
        <!-- <script type="text/javascript" src="barcelona/script.pageview-props.file-downloads.outbound-links.js" event-idioma="en" event-idioma-html="en" event-amfitrio="www.barcelona.cat" event-resolucio-pantalla="1536x864" data-domain="agregat,cfu0657"></script> -->
        <!-- <script src="barcelona/js_ATElS-Ob_uD4LN6E-AoQcYi-zSclZXy2nZzMAB0ipf8.js"></script> -->
        <!-- <script src="barcelona/cfu-avisos.js"></script> -->
        <!-- <script src="barcelona/core.js"></script> -->
        <!-- <script src="barcelona/configs.php" async="" defer="defer"></script> -->

        
    </head>
    
    <body>

    <header class="header">
                <ul type="none">
                    <input type="checkbox" id="menu-check">
                    <li class="logo"><a href="main.html">www.corfu.gr</a></li>
                    <li class="language_container">
                        <div>
                            <i class="fa-solid fa-earth-europe"></i>
                            <select id="languageSelector">
                                <option value="en">Ελληνικά</option>
                                <option value="fr">English</option>
                                <option value="es">Spanish</option>
                            </select>
                        </div>
                    </li>
                    
                    <li class="dummy-list-item"> </li>
                    <li class="menu-btn">
                        <label for="menu-check" id="menu-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </label>
                    </li>

                    <div class="header-menu-container" id="header-menu-container">
                        <ul id="header-menu-container-list">
                            <!-- AGGELIES -->
                            <li class="menu-1 expanded dropdown">
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
                </ul>
            </header>

            <div class="menu-container" id="largeMenu" style="margin-bottom: 4rem;">
                <ul>
                    <!-- AGGELIES -->
                    <li class="menu-1 expanded dropdown">
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

        <main id="main-content" role="main">
            <section class="region region-content">
                <div id="block-cfu-system-main" style="background-color: transparent">
                    <div data-history-node-id="757" class="node node--type-pagina node--view-mode-full page-basic-gallery">
                        <div class="container">
                            <h2>100 % Culture</h2> 
                        </div>
                        <div>
                            <div data-history-node-id="22714" class="full-background block-reference">
                                <div>
                                    <div id="block-agenda-cultura-guia" style="background-color: transparent">
                                        <h2>Cultural Events</h2>
                                        <div class="container curtural-events-portal curtural-events-portal-bloc-3">
                                            <h3>Cultural Events</h3>
                                            <ul class="row curtural-events">
                                                <?php foreach ($result as $row){ 
                                                ?>
                                                <li class="col-lg-4 col-md-6 curtural-event">
                                                    <article>
                                                        <div class="curtural-event-image">
                                                            <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"/>
                                                        </div>    
                                                        <div class="curtural-event-info">
                                                            <a class="curtural-event-name" href="event.php?id=<?=$row['id']?>"><?php echo $row["title"];?></a>
                                                            <p class="curtural-event-excerpt"><strong><?php echo $row["keyword"]?>. </strong><?php echo $row['short_desc'] ?></p>
                                                            <ul>
                                                                <li class="curtural-event-when"><span class="curtural-event-label">When:</span> <?php echo $row['start_date']?> - <?php echo $row['end_date'] ?></li>
                                                                <li class="curtural-event-where"><span class="curtural-event-label">Where:</span><?php echo $row['location']?></li>
                                                            </ul>
                                                        </div>
                                                    </article>
                                                </li>
                                                <?php 
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php $conn = null ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script>
            const menuBtn = document.getElementById("menu-btn");
            const responMenu = document.getElementById("header-menu-container");
            const responMenuList = document.getElementById("header-menu-container-list");
            var isClicked = false;

            
            menuBtn.addEventListener("click", function () {
                if (!isClicked) {
                    //Responsive Menu
                    responMenu.style.backgroundColor = "whitesmoke";
                    responMenu.style.display = "flex";
                    responMenu.style.transition = "opacity 250ms ease-in-out";
                    responMenu.style.position = "absolute";
                    responMenu.style.top = "0";
                    responMenu.style.bottom = "0";
                    responMenu.style.right = "0";
                    responMenu.style.left = "0";
                    responMenu.style.zIndex = "100";

                    responMenuList.style.marginTop = "1rem";
                    // Show the menu with transition
                    setTimeout(function () {
                        responMenu.style.opacity = "1";
                    }, 10); // Delay for transition
                } else {
                    // Hide the menu with transition
                    responMenu.style.opacity = "0";
                    setTimeout(function () {
                        responMenu.style.display = "none";
                    }, 250); // Transition duration
                }
                isClicked = !isClicked;
            });
        </script>
    </body>
</html>