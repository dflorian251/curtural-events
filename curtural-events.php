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
                <li class="logo"><a href="main.html">www.corfu.gr</a></li>
                <div>
                    <i class="fa-solid fa-earth-europe"></i>
                    <select id="languageSelector">
                        <option value="en">Ελληνικά</option>
                        <option value="fr">English</option>
                        <option value="es">Spanish</option>
                        
                    </select>
                </div>
                
                <li class="municipality_container"><img src="pics/municipality_corfu.jpg"></li>
            </ul>
        </header>
        
        <div id="menu-ciutat-cfu-v1" class="desktop amagat" style="margin-bottom: 4rem;">
            <div id="menu-ciutat-wrapper">
                <ul data-region="menu" class="clearfix level-0">
                    <li class="menu-0">
                        <a href="/en#hola-en"><img width="22" height="22" src="https://www.barcelona.cat/assetsdi/lameva/menu/img/ico00.png"></a>
                        <div>
                        </div>
                    </li>
                    <li class="menu-1 expanded">
                        <div class="icona"><img src="https://www.barcelona.cat/assetsdi/lameva/menu/img/fletxa_1.png"></div>
                        <a href="/en/living-in-cfu"><span style="display: none;">Map, cfu Guide, neighbourhoods and districts, health care, studying, accessibility, environment, sustainability, family, markets, diversity, assistance, pets</span>ΑΓΓΕΛΙΕΣ</a>
                        <div class="wrapper-second">
                            <div class="active-entradeta">
                                <h2>Living in cfu</h2>
                                <p>All you need to make your day-to-day life in the city easier</p>
                            </div>
                            <ul>
                                <li>
                                    <a href="/en/living-in-cfu" class="portada1">Section</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/living-neighbourhood" class="fembarri">In the neighbourhood</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/with-public-housing" class="habitatgepublic">Public housing</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/health" class="ambsalut">Health</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/studying" class="ambestudis">Studying</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/with-children" class="nens-i-nenes">Children</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/with-teenagers-and-young-people" class="adolescents-i-joves">Teenagers and young people</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/with-elderly-people" class="gent-gran">Elderly people</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/accessibility" class="ambaccessibilitat">Accessibility</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/diversity" class="ambdiversitat">Diversity</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/environment-and-sustainability" class="sostenibilitat">Environment and sustainability</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/pets" class="ambanimals">Pets</a>
                                </li>
                                <li>
                                    <a href="/en/living-in-cfu/markets" target="_self" class="femmercat">Markets</a>
                                </li>
                                <li>
                                    <a href="https://guia.barcelona.cat/en/directoris" target="_blank" class="directoriciutat" title="Open in a new window">City directory<span class="sr-only"> Open in a new window</span></a>
                                </li>
                                <li>
                                    <a href="https://w33.cfu.cat/planolcfu/en/" target="_blank" class="planolcfu" title="Open in a new window">cfu Map<span class="sr-only"> Open in a new window</span></a>
                                </li>
                                <li>
                                    <a href="https://ajuntament.barcelona.cat/guiadeserveis/es/" target="_blank" class="serveisiajuts" title="Open in a new window">Services and assistance<span class="sr-only"> Open in a new window</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- EKDHLWSEIS -->
                    <li class="menu-2 expanded">
                        <div class="icona"><img src="https://www.barcelona.cat/assetsdi/lameva/menu/img/fletxa_3.png"></div>
                        <a href="curtural-events.php"><span style="display: none;">Job market, work, benefits, training, services for entrepreneurs, companies, strategic sectors</span>ΕΚΔΗΛΩΣΕΙΣ</a>
                        <div class="wrapper-second">
                            <div class="active-entradeta">
                                <h2>Work and business</h2>
                                <p>Tools related to the world of work, business and entrepreneurship</p>
                            </div>
                            <ul>
                                <li>
                                    <a href="/en/work-and-business" class="portada2">Section</a>
                                </li>
                                <li>
                                    <a href="/en/work-and-business#looking-a-job" class="cerquesfeina anchor">Looking for a job?</a>
                                </li>
                                <li>
                                    <a href="/en/work-and-business#do-you-want-start-your-own-business" class="volsemprendre anchor">Do you want to start your own business?</a>
                                </li>
                                <li>
                                    <a href="/en/work-and-business#lifelong-training" class="formaciocontinua anchor">Lifelong training</a>
                                </li>
                                <li>
                                    <a href="/en/work-and-business#do-you-own-a-business" class="tensnegoci anchor">Do you own a business?</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-3 expanded">
                        <div class="icona"><img src="https://www.barcelona.cat/assetsdi/lameva/menu/img/fletxa_3.png"></div>
                        <a href="/en/what-to-do-in-cfu"><span style="display: none;">Agenda, courses, parks, beaches, Magic Fountain, culture, shopping, sport, leisure</span>What to do in cfu</a>
                        <div class="wrapper-second">
                            <div class="active-entradeta">
                                <h2>What to do in cfu</h2>
                                <p>All the activities and places that enable you to make the most of your city</p>
                            </div>
                            <ul>
                                <li>
                                    <a href="/en/what-to-do-in-cfu" class="portada4">Section</a>
                                </li>
                                <li>
                                    <a href="https://guia.barcelona.cat/en/agenda" target="_blank" class="agenda" title="Open in a new window">Agenda<span class="sr-only"> Open in a new window</span></a>
                                </li>
                                <li>
                                    <a href="https://guia.barcelona.cat/en/cursos" target="_blank" class="cursositaller" title="Open in a new window">Courses and workshops<span class="sr-only"> Open in a new window</span></a>
                                </li>
                                <li>
                                    <a href="http://guia.barcelona.cat/en/llistat?pg=search&amp;cerca=%2A%3A%2A&amp;tr=619&amp;sort=proxdate%2Casc&amp;af=code_prop&amp;c=00619%2A&amp;code0=0061901001&amp;nr=10&amp;code1=0061902001001" target="_blank" class="families" title="Open in a new window">Family activities<span class="sr-only"> Open in a new window</span></a>
                                </li>
                                <li>
                                    <a href="/en/what-to-do-in-cfu/get-fit" class="posatenforma">Get fit </a>
                                </li>
                                <li>
                                    <a href="/en/what-to-do-in-cfu/bathing-and-beaches" class="banysiplatges">Bathing and beaches</a>
                                </li>
                                <li>
                                    <a href="/en/what-to-do-in-cfu/parks-and-gardens" class="parcsijardins">Parks and gardens</a>
                                </li>
                                <li>
                                    <a href="/en/what-to-do-in-cfu/magic-fountain" class="font-magica">Magic Fountain</a>
                                </li>
                                <li>
                                    <a href="/en/what-to-do-in-cfu/shopping" class="acomprar">Shopping</a>
                                </li>
                                <li>
                                    <a href="/en/what-to-do-in-cfu/eat-and-drink" class="menjaribeure">Eat and drink</a>
                                </li>
                                <li>
                                    <a href="/en/what-to-do-in-cfu/culture" class="cultura100">100 % Culture</a>
                                </li>
                                <li>
                                    <a href="http://guia.barcelona.cat/en/" target="_blank" class="guiacfu" title="Open in a new window">cfu Guide<span class="sr-only"> Open in a new window</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-5 expanded">
                        <div class="icona"><img src="https://www.barcelona.cat/assetsdi/lameva/menu/img/fletxa_5.png"></div>
                        <a href="/en/discovercfu"><span style="display: none;">Places of interest in the city, history, popular culture, urban landscape, publications</span>Discover cfu</a>
                        <div class="wrapper-second">
                            <div class="active-entradeta">
                                <h2>Discover cfu</h2>
                                <p>Discover Barcelona’s points of interest, popular culture and history​.</p>
                            </div>
                            <ul>
                                <li>
                                    <a href="/en/discovercfu" class="portada5">Section</a>
                                </li>
                                <li>
                                    <a href="/en/discovercfu/pics" class="puntsdinteresdelaciutat">Places of interest in the city</a>
                                </li>
                                <li>
                                    <a href="/en/discovercfu/publications" class="barcelonallibres">Publications</a>
                                </li>
                                <li>
                                    <a href="/en/discovercfu/traditions-and-memory" class="tradicionsimemoria">Traditions and memory </a>
                                </li>
                                <li>
                                    <a href="/en/discovercfu/history" class="lahistoria">History</a>
                                </li>
                                <li>
                                    <a href="https://www.barcelona.cat/imatges/es/" target="_blank" class="coneixla" title="Open in a new window">Imágenes Barcelona<span class="sr-only"> Open in a new window</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-6 expanded">
                        <div class="icona"><img src="https://www.barcelona.cat/assetsdi/lameva/menu/img/fletxa_6.png"></div>
                        <a href="/en/getinvolved"><span style="display: none;">Creation, innovation, transformation, public participation, inclusion, collective projects</span>Get involved</a>
                        <div class="wrapper-second">
                            <div class="active-entradeta">
                                <h2>Get involved</h2>
                                <p>Learn about initiatives for creation, innovation and transformation in the city</p>
                            </div>
                            <ul>
                                <li class="grupo">
                                    <a href="/en/getinvolved" class="portada6">Section</a>
                                </li>
                                <li class="grupo">
                                    <a href="/en/getinvolved#innovate-and-create" class="innovaicrea anchor">Innovate and create</a>
                                </li>
                                <li class="grupo">
                                    <a href="/en/getinvolved#transform-it" class="transformala anchor">Transform it</a>
                                </li>
                                <li class="grupo">
                                    <a href="/en/getinvolved#participate-and-get-involved" class="participaiimplicat anchor">Participate and get involved</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
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
                                                            <a class="curtural-event-name" href="post.php?id=<?=$row['id']?>"><?php echo $row["title"];?></a>
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
    </body>
</html>