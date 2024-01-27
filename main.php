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
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
        <link rel="stylesheet" media="all" href="barcelona/core.css">
        <link rel="stylesheet" media="all" href="barcelona/css_OIbdenO1m2T6Gl8g0oFZmK7R3OTEWlUSxrnlyc4gTLM.css">
        <link rel="stylesheet" media="all" href="barcelona/bcn-avisos.css">
        <link rel="stylesheet" media="all" href="barcelona/css_rFRysy6MbVSEpojtuKXhCIczox98m6-B1zLbaxABV_E.css">
        <link rel="stylesheet" media="all" href="barcelona/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" media="all" href="barcelona/css_F4e7z303Ny2ifV3z3tSupMhjmCvWXEmfg1ViqTzA3ZA.css">
        <link rel="stylesheet" media="all" href="barcelona/css.css">
        <link rel="stylesheet" media="all" href="barcelona/menu.css">
        <link rel="stylesheet" media="all" href="barcelona/bcn-icon.css">
        <link rel="stylesheet" media="all" href="barcelona/css_-WFyFrRhz7gOEOtU4cPaRSXptKD8eZiQbGzfRfjoDl4.css">

        <link rel="stylesheet" media="all" href="style.css">
        
        <script type="text/javascript" charset="UTF-8" async="" src="barcelona/state.js"></script><script type="text/javascript" charset="UTF-8" src="barcelona/configuration.js"></script><script type="text/javascript" src="barcelona/uc.js" id="Cookiebot" data-blockingmode="auto" data-culture="EN" data-cbid="be63ba2d-fd22-4804-8cc6-1c81f5fbadba"></script><script type="text/javascript" src="barcelona/script.pageview-props.file-downloads.outbound-links.js" event-idioma="en" event-idioma-html="en" event-amfitrio="www.barcelona.cat" event-resolucio-pantalla="1536x864" data-domain="agregat,bcn0657"></script><script type="text/javascript" src="barcelona/container_beOBY9ep.js"></script><script src="barcelona/js_ATElS-Ob_uD4LN6E-AoQcYi-zSclZXy2nZzMAB0ipf8.js"></script>
        <script src="barcelona/bcn-avisos.js"></script>
        <script src="barcelona/core.js"></script>
        <script src="barcelona/configs.php" async="" defer="defer"></script>
    </head>
    
    <body>
        <main id="main-content" role="main">
            <section class="region region-content">
                <div id="block-bcn-system-main" style="background-color: transparent">
                    <div data-history-node-id="757" class="node node--type-pagina node--view-mode-full page-basic-gallery">
                        <div class="container">
                            <h2>100 % Culture</h2> 
                        </div>
                        <div>
                            <div data-history-node-id="22714" class="full-background block-reference">
                                <div>
                                    <div id="block-agenda-cultura-guia" style="background-color: transparent">
                                        <h2>Cultural Events</h2>
                                        <div class="container ajuntament-guia ajuntament-guia-bloc-3">
                                            <h3>Cultural Events</h3>
                                            <ul class="row ajuntament-guia-items">
                                                <?php foreach ($result as $row){ 
                                                ?>
                                                <li class="col-lg-4 col-md-6 ajuntament-guia-item">
                                                    <article>
                                                        <div class="ajuntament-guia-item-image">
                                                            <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>"/>
                                                        </div>    
                                                        <div class="ajuntament-guia-item-info">
                                                            <a class="ajuntament-guia-item-name" href="post.php?id=<?=$row['id']?>"><?php echo $row["title"];?></a>
                                                            <p class="ajuntament-guia-item-excerpt"><strong><?php echo $row["keyword"]?>.</strong><?php echo $row['short_desc'] ?></p>
                                                            <ul>
                                                                <li class="ajuntament-guia-item-when"><span class="ajuntament-guia-item-label">When:</span> <?php echo $row['start_date']?> - <?php echo $row['end_date'] ?></li>
                                                                <li class="ajuntament-guia-item-where"><span class="ajuntament-guia-item-label">Where:</span><?php echo $row['location']?></li>
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
    </body>
</html>