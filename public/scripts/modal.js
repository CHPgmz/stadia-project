/*function myFunction() {

  document.getElementById("myDropdown").classList.toggle("show");  
}

 function myFunction2(){

  document.getElementById("myDropdown2").classList.toggle("show");
 }

function myFunction3(){

    document.getElementById("myDropdown3").classList.toggle("show");
}
function myFunction4(){

    document.getElementById("myDropdown4").classList.toggle("show");
}
function myFunction5(){

    document.getElementById("myDropdown5").classList.toggle("show");
}
function myFunction6(){

    document.getElementById("myDropdown6").classList.toggle("show");
}
function myFunction7(){

    document.getElementById("myDropdown7").classList.toggle("show");
}

function myFunction8(){

    document.getElementById("myDropdown8").classList.toggle("show");
}*/

window.onclick = function(event) {
  if (!event.target.matches('.user-name')) {
    var dropdowns = document.getElementsByClassName("dropdown-content2");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn3')) {
    var dropdowns = document.getElementsByClassName("dropdown-content3");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn4')) {
    var dropdowns = document.getElementsByClassName("dropdown-content4");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn5')) {
    var dropdowns = document.getElementsByClassName("dropdown-content5");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn6')) {
    var dropdowns = document.getElementsByClassName("dropdown-content6");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn7')) {
    var dropdowns = document.getElementsByClassName("dropdown-content7");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn8')) {
    var dropdowns = document.getElementsByClassName("dropdown-content8");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
