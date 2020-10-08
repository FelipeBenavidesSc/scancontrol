     $(window).on('load',function(){
          $('#myModal').modal({
            backdrop: 'static',
            keyboard: false
          });
      });

      $(document).ready(function() {
     $('#cerrar').hide();
  $('#myform').submit(function() {
        //Añadimos la imagen de carga en el contenedor
        $('#loading').html('<div align="center" class="load"><img src="views/img/load2.gif" alt="loading" width="40%" /><br/>Un momento, por favor...</div>');
var nombre = $('input:text[name=nombre]').val()
  $('#nombreusuario').fadeIn(1000).html(nombre);
        $.ajax({
            type: "POST",
            url: "envio.php",
            data: $(this).serialize(),
            success: function(data) {
                //Cargamos finalmente el contenido deseado 
                $('#cerrar').show();
                $('#loading').fadeIn(1000).html(data);

            }
        });
        return false;
    });              
}) 