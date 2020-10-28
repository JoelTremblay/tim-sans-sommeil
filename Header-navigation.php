<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta name="description" content="template">
        <meta name="keywords" content="Header, Navbar">
        <meta name="author" content="SansSommeil">
        <link rel="stylesheet" href="sass/initialize.css">
        <link rel="stylesheet" href="sass/Header-Nav.css">
        <?php 
            if ($page == "accueil") echo'<link rel="stylesheet" href="sass/index.css">' ;
            else if ($page == "cours")
            {
                echo'<link rel="stylesheet" href="sass/cours.css">
                <link rel="stylesheet" href="sass/footer.css">';
            }
            else if ($page == "professeurs")
            {
                echo'<link rel="stylesheet" href="sass/styles.css">
                <link rel="stylesheet" href="sass/footer.css">';
            }
        ?>
        <script type="text/javascript" src="js/jssor.slider.min.js"></script>
        <script type="text/javascript" src="js/scriptCarrousel.js"></script>
        <link rel="stylesheet" href="sass/carrouselCSS.css">
        <title>TIM-2020</title>

    </head>

    <body <?php 
            if ($page == "professeurs")
            {
                echo'id="professeurs"';
            }
        ?>>

        <!-- header -->
        <header>

            <nav id="mySidenav" class="sidenav" role="navigation">
                <a href="javascript:void(0)" class="closebtn">&times;</a>
                <ul class="menuPrincipale">
                    <li><a href="coursProg.php">Cours</a></li>
                    <li><a href="professeurs.php">Professeurs</a></li>
                    <li><a href="#">Évenements</a></li>
                    <li><a href="#">Étudiants</a></li>
                    <li><a href="#">Projets</a></li>
                    <li><a href="#">Stages</a></li>
                </ul>
                
                <ul class="menuSecondaire">
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
                <div class="bande-couleur-vert"><img src="medias/images/vector 10.png"></div>
                <div class="bande-couleur-bleu"><img src="medias/images/vector 11.png"></div>
                <a>Réseaux sociaux</a>
                <ul class="liensMedias list-inline">
                    <li><img src="" alt=""></li>
                    <li><img src="" alt=""></li>
                    <li><img src="" alt=""></li>
                    <li><img src="" alt=""></li>
                    <li><img src="" alt=""></li>
                </ul>
            </nav>
            
            <!-- Use any element to open the sidenav -->
            <span class="openbtn">&#9776;</span>

            
            <!-- logo TIM -->
            <div class="divLogo logoHeader logoTIM">
                <a href="index.php">
                    <img src="<?php 
                    if ($page == "accueil") echo'medias/images/timLogo.png';
                    else if ($page == "cours") echo'medias/images/_LogoTIM_Prog 1.png';
                    ?>" alt="" class="imgLogo">
                </a>
            </div>

            <!-- logo Maisonneuve -->
            <div class="divMaisonneuve logoHeader logoMaisonneuve">
                <a href="https://www.cmaisonneuve.qc.ca/"><img src="medias/images/logoMaisonneuve.png" alt="" class="imgMaisonneuve"></a>
            </div>

        </header>

        <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
        <div id="main">
            ...
        </div>