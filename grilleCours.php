<?php
  // Inclut le haut de page.
  $page = "grilleCours";
  include("Header-navigation.php");

?>
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
        $nbCours = count($laSession);
        $tailleAdaptee = (13 * $nbCours);
        $tailleStr = $tailleAdaptee . "vw";

        $frAdapte = "";
        for ($i = 0; $i < $nbCours; $i++)
        {
          //echo $frAdapte;
          $frAdapte = $frAdapte . "1fr ";
        }
        
        echo"<div style='grid-row-start: $rangeeNum; grid-template-rows: $frAdapte;' class='session sessionInactive'><h2 class='numSession' style='width: $tailleStr;'>Session ".$rangeeNum.'</h2>';
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
<?php
  include("footer.php");
?>