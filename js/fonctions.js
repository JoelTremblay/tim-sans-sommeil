var intFrameWidth = window.innerWidth;
console.log(intFrameWidth);

function openNav() {
  document.querySelector("#mySidenav").style.opacity = "100";
  if (intFrameWidth <= 425){
    document.querySelector("#mySidenav").style.width = "60%";
  }
  else if (intFrameWidth > 425 & intFrameWidth <= 1023){
    document.querySelector("#mySidenav").style.width = "45%";
  }
  else {
    document.querySelector("#mySidenav").style.width = "30%";
  }
  }

  function closeNav() {
    document.querySelector("#mySidenav").style.width = "0";
    document.querySelector("#mySidenav").style.opacity = "0";
  }
  
  document.querySelector(".openbtn").addEventListener("click", openNav);
  document.querySelector(".closebtn").addEventListener("click", closeNav);