
function capturar(obj){
    var id = obj.id

      console.log(id);

      $.ajax({
          url: '../controller/eliminar.php',
          type: 'POST',
          dataType: 'json',
          data: 'id_usuario=' + id,
          beforeSend: function(){

          },
              success: function (respuesta) {
                  if(respuesta.htmloption1){

                  }else if(respuesta.htmloption2){

                      window.location = 'Vlistar.php?valor=2';

                  }else if(respuesta.htmloption3){
                      window.location = 'Vlistar.php?valor=1';
                  }  

              },
              error: function (xhr, err) {
                  alert("readyState =" + xhr.readyState + " estado =" + xhr.status + "respuesta =" + xhr.responseText);
                  //alert("ERROR AL PROCESAR FORMULARIO INTENTE DE NUEVO");
    }
      });

} 



  
