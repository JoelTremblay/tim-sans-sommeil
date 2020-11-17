<?php
  // Inclut le haut de page.
  $page = "accueil";
  include("Header-navigation.php");

?>
    <br><br><br><br><br>
    <div class="contenu">
    <div id="logoSite">
        <img src="medias/images/timLogo.png" alt="">
    </div>
        <section class="section-principale">
            <div class="presentation" id="intro">
                <div>
                    <h1>Bienvenue au TIM !</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <img src="medias/images/refImage1.jpg" alt="">
            </div>
            <div class="presentation" id="poss">
                <img src="medias/images/refImage5.jpg" alt="">
                <div>
                    <h2>Au TIM vous pouvez...</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure aliquid optio sequi incidunt cupiditate doloribus recusandae, non illum nostrum delectus, eius ipsam veritatis soluta ratione necessitatibus accusantium laudantium dolor. Illum?</p>
                </div>
            </div>
            <div class="presentation" id="eleves">
                <div>
                    <h2>Et aussi...</h2>
                    <p>Tristique sollicitudin nibh sit amet commodo nulla facilisi nullam. A cras semper auctor neque vitae tempus. Diam vel quam elementum pulvinar etiam non. Malesuada proin libero nunc consequat interdum varius sit amet. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam. </p>
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
                            <div>
                                <img data-u="image" src="medias/images/refImage2.jpg" />
                            </div>
                            <div>
                                <img data-u="image" src="medias/images/refImage3.jpg" />
                            </div>
                            <div>
                                <img data-u="image" src="medias/images/refImage4.png" />
                            </div>
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
    <footer class="mainFooter" class="acronym-footer">
            <div class="conteneurReseaux">
                <h3>Reseaux Sociaux...</h3>
                <ul>
                    <p>test texte</p>
                    <br>
                    <li><a href="" target="_blank"><img src="medias/images/logos/discord.png" alt=""></a></li>
                    <li><a href="" target="_blank"><img src="medias/images/logos/facebook.png" alt=""></a></li>
                    <li><a href="" target="_blank"><img src="medias/images/logos/linkedin.png" alt=""></a></li>
                    <li><a href="" target="_blank"><img src="medias/images/logos/instagram.png" alt=""></a></li>
                    <li><a href="" target="_blank"><img src="medias/images/logos/youtube.png" alt=""></a></li>
                </ul>
            </div>
        </footer>
        <footer class="acronym-footer">
            <div>
                <ul>
                    <li>Technique</li>
                    <li>Integration</li>
                    <li>Multimedia</li>
                </ul>
            </div>
        </footer>
    </body>
</html>