$(document).ready(function () {
    $("#ocultar-dash").toggle(
        function (e) {
            $("#id-cont").removeClass("container");
            $("#id-head").removeClass("header");
            $("#id-cont").addClass("cont-new");
            $("#id-head").addClass("header-new");
            $("#id-nav").hide();
            /*$(this).text('Cerrar el panel');*/
            e.preventDefault();
        }, // Separamos las dos funciones con una coma

        function (e) {
            /*$(this).text('Mostrar el panel oculto');*/
            $("#id-cont").removeClass("cont-new");
            $("#id-head").removeClass("header-new");
            $("#id-head").addClass("header");
            $("#id-cont").addClass("container");
            $("#id-nav").show();
            e.preventDefault();
        }
    );
});
