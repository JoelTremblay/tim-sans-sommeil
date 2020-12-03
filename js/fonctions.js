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

  //Fonctions Guy

  if (window.innerWidth <= 600)
  {
    let toutesLesSession = document.querySelectorAll(".session");

    for (let i = 0; i < toutesLesSession.length; i++)
    {
      toutesLesSession[i].addEventListener("mousedown", function()
      {
        changeEtatSession(this);
      });
    }

    function changeEtatSession(element)
    {
      if (element.classList[1] == "sessionInactive")
      {
        console.log("active session");
        for (let i = 0; i < toutesLesSession.length; i++)
        {
          toutesLesSession[i].classList.remove("sessionActive");
          toutesLesSession[i].classList.add("sessionInactive");
        }
        element.classList.remove("sessionInactive");
        element.classList.add("sessionActive");
        return;
      }
      else if (element.classList[1] == "sessionActive")
      {
        console.log("desactive session");
        element.classList.remove("sessionActive");
        element.classList.add("sessionInactive");
        return;
      }
    }

  }
  else
  {
    let tousLesCours = document.querySelectorAll(".cours");
    for (let i = 0; i < tousLesCours.length; i++)
    {
      tousLesCours[i].addEventListener("mousedown", function()
      {
        changeEtatCours(this);
      });
    }
  
    /**
     * @author Guy Boucher
     * @param {HTMLElement} element cours dont on veut changer l'etat
     */
    function changeEtatCours(element)
    {
      //console.log(event);
      if (element.classList[1] == "coursInactif")
      {
        console.log("active cours");
        for (let i = 0; i < tousLesCours.length; i++)
        {
          tousLesCours[i].classList.remove("coursActif");
          tousLesCours[i].classList.add("coursInactif");
        }
        element.classList.remove("coursInactif");
        element.classList.add("coursActif");
        return;
      }
      else if (element.classList[1] == "coursActif")
      {
        console.log("desactive cours");
        element.classList.remove("coursActif");
        element.classList.add("coursInactif");
        return;
      }
    }
  }