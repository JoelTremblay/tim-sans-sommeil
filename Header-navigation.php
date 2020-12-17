<!DOCTYPE html>
<html lang="fr">

<head>

        <meta charset="UTF-8">
        <meta name="description" content="template">
        <meta name="keywords" content="Header, Navbar">
        <meta name="author" content="SansSommeil">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <link rel="stylesheet" href="sass/initialize.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@700&display=swap" rel="stylesheet">
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
                    <li><a class="aNav" href="grilleCours.php">Grille Cours</a></li>
                    <li><a class="aNav" href="professeurs.php">Professeurs</a></li>
                    <li><a class="aNav" href="etudiants-tim.html">Étudiants</a></li>
                    <li><a class="aNav" href="projets.php">Projets</a></li>
                    <li><a class="aNav" href="stages.php">Stages</a></li>
                </ul>

                <ul class="menuSecondaire">
                    <li>
                        <a class="aNav" href="<?php if ($page == "stages") echo'stages-art.php'; else if ($page == "stages-art") echo'stages-art.php'; else if ($page == "stages-prog") echo'stages-art.php';?>">
                            <?php 
                                    if ($page == "accueil") echo' ';
                                    else if ($page == "grilleCours") echo' ';
                                    else if ($page == "etudiants") echo' ';
                                    else if ($page == "professeurs") echo' ';
                                    else if ($page == "projets") echo' ';
                                    else if ($page == "stages") echo'Artistique';
                                    else if ($page == "stages-art") echo'Artistique';
                                    else if ($page == "stages-prog") echo'Artistique';
                                ?>
                        </a>
                    </li>
                    <li>
                        <a class="aNav" href="<?php if ($page == "stages") echo'stages-prog.php'; else if ($page == "stages-art") echo'stages-prog.php'; else if ($page == "stages-prog") echo'stages-prog.php';?>">
                            <?php 
                                    if ($page == "accueil") echo' ';
                                    else if ($page == "grilleCours") echo' ';
                                    else if ($page == "etudiants") echo' ';
                                    else if ($page == "professeurs") echo' ';
                                    else if ($page == "projets") echo' ';
                                    else if ($page == "stages") echo'Programmation';
                                    else if ($page == "stages-art") echo'Programmation';
                                    else if ($page == "stages-prog") echo'Programmation';
                                ?>
                        </a>
                    </li>
                </ul>
                <div class="divBandesCouleurs">
                    <div class="div-bande-couleur-vert"><img class="bande-couleur-vert"
                            src="medias/images/vector 10.png"></div>
                    <div class="div-bande-couleur-bleu"><img class="bande-couleur-bleu"
                            src="medias/images/vector 11.png"></div>
                </div>
                <h3 class="titreReseauxSociaux">Réseaux sociaux</h3>
                <ul class="liensMedias list-inline">
                    <li><a href="https://www.facebook.com/groups/244018972413874/?fref=ts" onclick="window.open(this.href,'_blank');return false;"><img class="imgLiensMedias" src="medias/images/logos2/facebook.png" alt="Facebook" ></a></li>
                    <li><a href="https://www.linkedin.com/in/tim-maisonneuve-9407b7131/?originalSubdomain=ca" onclick="window.open(this.href,'_blank');return false;"><img class="imgLiensMedias" src="medias/images/logos2/linkedin.png" alt="Linkedin"></a></li>
                    <li><a href="https://discord.com/channels/349586892762775564/349736437949792257" onclick="window.open(this.href,'_blank');return false;"><img class="imgLiensMedias" src="medias/images/logos2/discord.png" alt="Discord"></a></li>
                    <li><a href="https://www.youtube.com/user/TIMcreation3D" onclick="window.open(this.href,'_blank');return false;"><img class="imgLiensMedias" src="medias/images/logos2/youtube.png" alt="Youtube"></a></li>
                    <li><a href="https://www.instagram.com/maisonneuvetim/" onclick="window.open(this.href,'_blank');return false;"><img class="imgLiensMedias" src="medias/images/logos2/instagram.png" alt="Instagram" ></a></li>
                </ul>
            </nav>

            <!-- Use any element to open the sidenav -->
            <span class="openbtn">&#9776;</span>


            <!-- logo TIM -->
            <div class="divLogo logoHeader logoTIM Anim1">
                <a href="index.php">
                    <img src="medias/images/prog.png" class="imgLogo">
                </a>
            </div>

            <div class="divLogo logoHeader logoTIM Anim2">
                <a href="index.php">
                    <img src="medias/images/creation.png" alt="" class="imgLogo">
                </a>
            </div>

        </header>