/*$(document).ready(function() {
    $('#ocultar-dash').click(function() {
      $("nav.navbar").toggle("slow", function(){
        $("#id-cont").removeClass("container");
        $("#id-cont").addClass("cont2");
      });
    });
});*/

			$(document).ready(function(){ 
		    $('#ocultar-dash').toggle( 
   	     function(e){  
      	      
      	      $('#id-cont').removeClass("container");
               $('#id-cont').addClass("cont-new");
               $('#id-nav').hide();
            /*$(this).text('Cerrar el panel');*/
         	   e.preventDefault();

		        }, // Separamos las dos funciones con una coma
    
      	  function(e){ 
            /*$(this).text('Mostrar el panel oculto');*/
				  $('#id-cont').removeClass("cont-new");
              $('#id-cont').addClass("container");
              $('#id-nav').show();
            	e.preventDefault();
		        }
			    );
				});
