var contadorView=0;
var contadorController=0;
var contadorModel=0;

$(document).ready(function(){

  //alert("Cargando Jquery...!");
  //alert("Jquery Cargado con Éxito...!");
  setInterval(function(){
    var cantidad = $("#hidParpadear").val();
    if( cantidad == 0 ){
      $("#spanParpadear").html("_");
      cantidad++;
      $("#hidParpadear").val(cantidad);
    }else{
      $("#spanParpadear").html("");
      cantidad--;
      $("#hidParpadear").val(cantidad);
    }
  },500);

  $("#btnView").click(function(){
    if( contadorView < 16){
      let arrMensaje = new Array();
      arrMensaje[0] = "<br/><span class='spanView'>Hola, este boton solo te deja ver que estas en la vista.</span>";
      arrMensaje[1] = "<br/>Te güio...";
      arrMensaje[2] = "<br/>1. Abre el explorador de Archivos";
      arrMensaje[3] = "<br/>2. Ve al disco C o Raiz Local";
      arrMensaje[4] = "<br/>3. Abre la carpeta XAMPP";
      arrMensaje[5] = "<br/>4. Abre la carpeta HTDOCS";
      arrMensaje[6] = "<br/>5. Abre la carpeta ExampleMVC";
      arrMensaje[7] = "<br/>6. Abre la carpeta view";
      arrMensaje[8] = "<br/>7. Abre el archivo viewInterfaz.php";
      arrMensaje[9] = "<br/>8. En el archivo viewInterfaz.php, lee la linea 15...";
      arrMensaje[10] = "<br/>9. Vuelve al explorador de archivos...";
      arrMensaje[11] = "<br/>10. En la carpeta view, encontraras 3 carpetas más.";
      arrMensaje[12] = "<br/>11. Abre la carpeta js, como te indico la linea 15 de el archivo viewInterfaz.php .";
      arrMensaje[13] = "<br/>12. Ahora abre el archivo scriptInterfaz.js";
      arrMensaje[14] = "<br/>13. Ahora lee la linea 25";
      arrMensaje[15] = "<br/>Ahora saludame, soy el script que se esta generando desde la viewInterfaz.php , y estoy hecho en JavaScript.(Este fue el ultimo paso)";
      
      $("#divInstrucciones").append(arrMensaje[contadorView]);
      $('#divInstrucciones').scrollTop( $('#divInstrucciones').prop('scrollHeight') );
      contadorView++;
    }else{
      $("#divInstrucciones").html("");
      $("#divInstrucciones").append('Comenzemos...');
      contadorView=0;
    }
  });

  $("#btnController").click(function(){
    
    if( contadorController < 22){  
      let parametros = {
        opcion: "controlador",
        indice: contadorController
      }
      $.ajax({
        url: "../controller/controllerInterfaz.php",
        data: parametros,
        type: "POST",
        dataType: "JSON",
        success: function (data) {
          $("#divInstrucciones").append(data);
          $('#divInstrucciones').scrollTop( $('#divInstrucciones').prop('scrollHeight') );
          contadorController++;
        }
      });
    }else{
      $("#divInstrucciones").html("");
      $("#divInstrucciones").append('Comenzemos...');
      contadorController=0;
    }
  });

  $("#btnModel").click(function(){
    
    if( contadorModel < 25){  
      let parametros = {
        opcion: "modelo",
        indice: contadorModel
      }
      $.ajax({
        url: "../controller/controllerInterfaz.php",
        data: parametros,
        type: "POST",
        dataType: "JSON",
        success: function (data) {
          $("#divInstrucciones").append(data);
          $('#divInstrucciones').scrollTop( $('#divInstrucciones').prop('scrollHeight') );
          contadorModel++;
        }
      });
    }else{
      $("#divInstrucciones").html("");
      $("#divInstrucciones").append('Comenzemos...');
      contadorModel=0;
    }
  });

  $("#btnClear").click(function(){
    $("#divInstrucciones").html("");
    $("#divInstrucciones").append('Comenzemos...');
    
  });

});