function ajax_actualizacion(){

      var data = $("#form-actualizacion").serializeArray();
      $.ajax({
          url: '../controller/actualizar.php',
          type: 'POST',
          dataType: 'json',
          data: data,
          beforeSend: function(){

          },
              success: function (respuesta) {
                  if(respuesta.htmloption1){

                  }else if(respuesta.htmloption2){
                    window.location = 'Vlistar.php?valor=4';

                  }else if(respuesta.htmloption3){

                    	window.location = 'Vlistar.php?valor=3';
                  }  

              },
              error: function (xhr, err) {
                  //alert("readyState =" + xhr.readyState + " estado =" + xhr.status + "respuesta =" + xhr.responseText);
                  alert("ERROR AL PROCESAR FORMULARIO INTENTE DE NUEVO");
		}
      });
}