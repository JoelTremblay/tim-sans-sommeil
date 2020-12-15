<?php
  // Inclut le haut de page.
  $page = "accueil";
  include("Header-navigation.php");

?>
<div id="accueil">
    <div id="accueilBody">
        <br><br><br><br><br>
        <section class="motifLignes">
            <img src="medias/images/motifs_accueil/ligne_0.png" id="ligneFond_1"></img>
            <img src="medias/images/motifs_accueil/ligne_1.png" id="ligneFond_2"></img>
            <img src="medias/images/motifs_accueil/ligne_2.png" id="ligneFond_3"></img>
            <img src="medias/images/motifs_accueil/ligne_3.png" id="ligneFond_4"></img>
        </section>
        <div class="contenu">
            <div id="logoSite">
                <img src="medias/images/timLogo.png" alt="">
            </div>
            <section class="section-principale">
                <div class="presentation" id="intro">
                    <div>
                        <h1>Bienvenue au TIM !</h1>
                        <p>Maisonneuve est le seul cégep sur l’Île de Montréal à offrir ce programme qui vous offre une immersion dans le monde du jeu 2D/3D, du Web, des technologies mobiles et des médias numériques, tout en apprenant différents langages de programmation</p>
                    </div>
                    <img src="medias/images/refImage1.jpg" alt="">
                </div>
                <div class="presentation" id="poss">
                    <img src="medias/images/refImage5.jpg" alt="">
                    <div>
                        <h2>Au TIM vous pouvez...</h2>
                        <p>Dans ce programme, vous apprendrez à identifier, analyser, imaginer, réaliser et coordonner un projet multimédia et les différentes étapes de production qui y sont liées tels que la médiatisation, la conception, l’intégration et l'environnement professionnel</p>
                    </div>
                </div>
                <div class="presentation" id="eleves">
                    <div>
                        <h2>Et aussi...</h2>
                        <p>Maisonneuve soutient ses étudiants dans la mise en pratique de leurs apprentissages. Comme étudiant, vous pourrez compter sur l’aide des enseignants et sur des installations à la fine pointe de la technologie.</p>
                    </div>
                    <img src="medias/images/refImage6.jpg" alt="">
                </div> 
                <div class="conteneurCarrousel">
                    <div id="citation">
                        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">
                            <!-- Loading Screen -->
                            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="svg/loading/static-svg/spin.svg" />
                            </div>
                            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
                            <?php
                                    $dossier = "medias/images/Carrousel/";
                                    $images = glob($dossier . "/*.jpg");
                                    
                                    foreach($images as $image)
                                    {
                                      echo '<div><img data-u="image" src='."$image".' /></div>';
                                    }
                                ?>
                            </div>
                            <!-- Bullet Navigator -->
                            <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                    <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                        <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                    </svg>
                                </div>
                            </div>
                            <!-- Arrow Navigator -->
                            <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                </svg>
                            </div>
                        </div>
                        <script type="text/javascript">jssor_1_slider_init();</script>
                    </div>
                </div>
            </section>
        </div>
        <div class="reseauxAccueil">
            <div class="conteneurReseaux">
                <h3>Suivez nos réseaux sociaux !</h3>
                <ul>
                    <br>
                    <li><a href="" target="_blank"><img src="medias/images/logos/discord.png" alt=""></a></li>
                    <li><a href="" target="_blank"><img src="medias/images/logos/facebook.png" alt=""></a></li>
                    <li><a href="" target="_blank"><img src="medias/images/logos/linkedin.png" alt=""></a></li>
                    <li><a href="" target="_blank"><img src="medias/images/logos/instagram.png" alt=""></a></li>
                    <li><a href="" target="_blank"><img src="medias/images/logos/youtube.png" alt=""></a></li>
                </ul>
            </div>
    </div>
    </div>
</div>
<?php
    include("footer.php");
?>
