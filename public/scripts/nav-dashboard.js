$(document).ready(function () {
  $("#home").toggle(
    function (e) {
      $("#myDropdown").slideDown();
      /*$('#id-head').css("background-color", "red");*/
      /*$(this).text('Cerrar el panel');*/
      e.preventDefault();
    }, // Separamos las dos funciones con una coma

    function (e) {
      $("#myDropdown").slideUp();
      /*$(this).text('Mostrar el panel oculto');*/
      /*$('#id-head').css("background-color", "white");*/
      e.preventDefault();
    }
  );
});

$(document).ready(function () {
    $("#mtr").toggle(
      function (e) {
        $("#myDropdown2").removeClass("dropdown-content");
        $("#myDropdown2").addClass("dropdown-content-2");
        $("#myDropdown2").slideDown();
        $(".dropdown-content").slideUp();
        e.preventDefault();
      }, // Separamos las dos funciones con una coma
  
      function (e) {
        $("#myDropdown2").slideUp();
        e.preventDefault();
      }
    );
  });

  $(document).ready(function () {
    $("#osl").toggle(
      function (e) {
        $("#myDropdown3").removeClass("dropdown-content");
        $("#myDropdown3").addClass("dropdown-content-3");
        $("#myDropdown3").slideDown();
        $(".dropdown-content-").slideUp();
        e.preventDefault();
      }, // Separamos las dos funciones con una coma
  
      function (e) {
        $("#myDropdown3").slideUp();
        $(".dropdown-content").slideUp();
        e.preventDefault();
      }
    );
  });

  $(document).ready(function () {
    $("#qjas").toggle(
      function (e) {
        $("#myDropdown4").removeClass("dropdown-content");
        $("#myDropdown4").addClass("dropdown-content-4");
        $("#myDropdown4").slideDown();
        $(".dropdown-content").slideUp();
        e.preventDefault();
      }, // Separamos las dos funciones con una coma
  
      function (e) {
        $("#myDropdown4").slideUp();
        e.preventDefault();
      }
    );
  });

  $(document).ready(function () {
    $("#cdr").toggle(
      function (e) {
        $("#myDropdown5").removeClass("dropdown-content");
        $("#myDropdown5").addClass("dropdown-content-5")
        $("#myDropdown5").slideDown();
        $(".dropdown-content").slideUp();
        e.preventDefault();
      }, // Separamos las dos funciones con una coma
  
      function (e) {
        $("#myDropdown5").slideUp();
        e.preventDefault();
      }
    );
  });

  $(document).ready(function () {
    $("#tcn").toggle(
      function (e) {
        $("#myDropdown6").removeClass("dropdown-content");
        $("#myDropdown6").addClass("dropdown-content-6");
        $("#myDropdown6").slideDown();
        $(".dropdown-content").slideUp();
        e.preventDefault();
      }, // Separamos las dos funciones con una coma
  
      function (e) {
        $("#myDropdown6").slideUp();
        e.preventDefault();
      }
    );
  });

  $(document).ready(function () {
    $("#adm").toggle(
      function (e) {
        $("#myDropdown7").removeClass("dropdown-content");
        $("#myDropdown7").addClass("dropdown-content-7");
        $("#myDropdown7").slideDown();
        $(".dropdown-content").slideUp();
        e.preventDefault();
      }, // Separamos las dos funciones con una coma
  
      function (e) {
        $("#myDropdown7").slideUp();
        e.preventDefault();
      }
    );
  });

