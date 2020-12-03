<?php
  // Inclut le haut de page.
  $page = "grilleCours";
  include("Header-navigation.php");

?>
<div id="grilleCours">
  <section class="contenuCours">
    <div class="conteneurCours">
    <?php
      $coursJSONString = file_get_contents("data/grilleDeCours.json");
      $coursTab = json_decode($coursJSONString, true);

      //echo '<p>' + $coursTab[0] + '</p>';
      $rangeeNum = 1;
      foreach ($coursTab as $sessionTab => $laSession) 
      {
        $colonneNum = 1;
        $tailleStr = "";
        $tailleAdaptee = (13 * count($laSession));
        $tailleStr = $tailleAdaptee . "vw";
        //echo $tailleAdaptee;
        echo"<div style='grid-row-start: $rangeeNum;' class='session sessionInactive'><h2 class='numSession' style='width: $tailleStr;'>Session ".$rangeeNum.'</h2>';
        foreach ($laSession as $coursDelaSession) 
        {
          $colonneNum++;
          echo "<div grid-column-end: $colonneNum;' class = 'cours coursInactif'><h3>".$coursDelaSession["nom"]."</h3>
          <p>".$coursDelaSession["ponderation"]."</p>
          <p>".$coursDelaSession["prealable"]."</p></div>";
        }
        echo'</div>';
        $rangeeNum++;
      }
    ?>
    </div>
  </section>
</div>
<?php
  include("footer.php");
?>