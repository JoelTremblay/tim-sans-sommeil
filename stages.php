<?php
  // Inclut le haut de page.
  $page = "stages";
  include("Header-navigation.php");
?>
<div id = "stagesConteneur">
<div id = "stages">
  <section class="entete-stages">
    <h1>Stages en milieu professionel</h1>
    <div class="arriere-plan">
      <img class="img-entete" src="medias/images/banniere-entreprise.png" alt="">
    </div>
  </section>
  <section class="categories">
    <ul>
      <li><a href="stages-art.php">Artistique</a><img class="img-categorie" src="medias/images/art.png" alt=""></li>
      <li><a href="stages-prog.php">Programmation</a><img class="img-categorie" src="medias/images/prog-logo.png" alt=""></li>  
    </ul>
    <img class="ligne-pattern1" src="medias/images/lignes-pattern-stages.png" alt="">
    <img class="ligne-pattern2" src="medias/images/lignes-pattern-stages.png" alt="">
  </section>
</div>
</div>
  <?php
  // Inclut le haut de page.
  include("footer.php");
?>