/* navigation ouvre et ferme le menu POUR que cela fonctionne il 
faut absolument que la classe main soit attribué a la balise 
du corps principale de vos page*/

/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.querySelector("#mySidenav").style.width = "28%";
    document.querySelector("#main").style.marginLeft = "28%";
  }
  /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.querySelector("#mySidenav").style.width = "0";
    document.querySelector("#main").style.marginLeft = "0";
  }
  
  document.querySelector(".openbtn").addEventListener("click", openNav);
  document.querySelector(".closebtn").addEventListener("click", closeNav);