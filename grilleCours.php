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
        echo"<div style='grid-row-start: $rangeeNum;' class='session'><h2>Session ".$rangeeNum.'</h2>';
        foreach ($laSession as $coursDelaSession) 
        {
          $colonneNum++;
          echo "<div grid-column-end: $colonneNum;' class = 'cours'><h3>".$coursDelaSession["nom"]."</h3>
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