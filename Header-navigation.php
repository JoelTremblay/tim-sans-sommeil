<!DOCTYPE html>
<html lang="fr">

    <head>

        <meta charset="UTF-8">
        <meta name="description" content="template">
        <meta name="keywords" content="Header, Navbar">
        <meta name="author" content="SansSommeil">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link rel="stylesheet" href="sass/initialize.css">
        <?php 
            if ($page == "accueil") echo'<link rel="stylesheet" href="sass/index.css">';
            else if ($page == "grilleCours")
            {
                echo'<link rel="stylesheet" href="sass/grilleCours.css">';
            }
            else if ($page == "coursParCours")
            {
                echo '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                <link rel="stylesheet" href="sass/coursParCours.css">';
            }
            else if ($page == "stages")
            {
                echo'<link rel="stylesheet" href="sass/stages-general.css">';
            }
            else if ($page == "galerie-page")
            {
                echo'<link rel="stylesheet" href="sass/styles.css">
                <link rel="stylesheet" href="sass/footer.css">
                <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
                <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>';
            }
            else if ($page == "stages-art" || "stages-prog")
            {
                echo'<link rel="stylesheet" href="../tim-sans-sommeil/sass/stages-art-prog.css">';
            }
            echo '<link rel="stylesheet" href="sass/footer.css">';
        ?>
        <script type="text/javascript" src="js/jssor.slider.min.js"></script>
        <script type="text/javascript" src="js/scriptCarrousel.js"></script>
        <link rel="stylesheet" href="sass/carrouselCSS.css">
        <link rel="stylesheet" href="sass/Header-Nav.css">
        <title>TIM-2020</title>

    </head>

    <body <?php 
            if ($page == "galerie-page")
            {
                echo'class="galerie-page"';
            }
        ?>>
        <div id="header">

            <header>
                <nav id="mySidenav" class="sidenav" role="navigation">
                    <a href="javascript:void(0)" class="closebtn">&times;</a>
                    <ul class="menuPrincipale">
                        <li><a href="grilleCours.php">Grille Cours</a></li>
                        <li><a href="coursParCours.php">Cours</a></li>
                        <li><a href="professeurs.php">Professeurs</a></li>
                        <li><a href="#">Évenements</a></li>
                        <li><a href="etudiants-tim.html">Étudiants</a></li>
                        <li><a href="projets.php">Projets</a></li>
                        <li><a href="stages.php">Stages</a></li>
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
                        else if ($page == "grilleCours") echo'medias/images/timLogo_Prog.png';
                        else echo'medias/images/timLogo.png';
                        ?>" alt="" class="imgLogo">
                    </a>
                </div>
    
                <!-- logo Maisonneuve -->
                <div class="divMaisonneuve logoHeader logoMaisonneuve">
                    <a href="https://www.cmaisonneuve.qc.ca/" target="_blank"><img src="medias/images/logos/logoMaisonneuveSansTxt.png" alt="" class="imgMaisonneuve"></a>
                </div>
    
            </header>
    
            <div id="main">
                ...
            </div>
        </div>
        <!-- header -->
        
        <script src="js/fonctions.js"></script>
    </body>
</html>
