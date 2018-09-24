function ajax_registro(){
            var data = $("#form-registro").serializeArray();
          $.ajax({
              url: '../controller/registrar.php',
              type: 'POST',
              dataType: 'json',
              data: data,
              beforeSend: function(){

              },
                  success: function (respuesta) {
                      if(respuesta.htmloption1){

                      }else if(respuesta.htmloption2){

                            $("#_AJAXP_").html(respuesta.htmloption2).attr("class","alert alert-danger menu");

                      }else if(respuesta.htmloption3){

                            $("#_AJAXP_").html(respuesta.htmloption3).attr("class","alert alert-success menu");
                            document.getElementById("form-registro").reset();
                      }  

                  },
                  error: function (xhr, err) {
                      //alert("readyState =" + xhr.readyState + " estado =" + xhr.status + "respuesta =" + xhr.responseText);
                      alert("ERROR AL PROCESAR FORMULARIO INTENTE DE NUEVO");
            }
          });
}