<?php

  if( isset($_POST) ){
    
    if( $_POST["opcion"] == "controlador" ){
      echo json_encode(mensajeControlador($_POST));
    }elseif( $_POST["opcion"] == "modelo" ){
      echo json_encode(mensajeModelo($_POST));
    }

  }

  function mensajeControlador($datos){
    $arrMensaje = array();
    $mensaje = "";
    $indice = $datos["indice"]; 
    $arrMensaje[0] = "<br/><span class='spanView'>Hola, este boton solo te deja ver que estas en el controlador.</span>";
    $arrMensaje[1] = "<br/>Te güio...";
    $arrMensaje[2] = "<br/>1. Abre el explorador de Archivos";
    $arrMensaje[3] = "<br/>2. Ve al disco C o Raiz Local";
    $arrMensaje[4] = "<br/>3. Abre la carpeta XAMPP";
    $arrMensaje[5] = "<br/>4. Abre la carpeta HTDOCS";
    $arrMensaje[6] = "<br/>5. Abre la carpeta ExampleMVC";
    $arrMensaje[7] = "<br/>6. Abre la carpeta view";
    $arrMensaje[8] = "<br/>7. Abre el archivo viewInterfaz.php";
    $arrMensaje[9] = "<br/>8. En el archivo viewInterfaz.php, lee la linea 15...";
    $arrMensaje[10] = "<br/>9. Vuelve al explorador de archivos...";
    $arrMensaje[11] = "<br/>10. En la carpeta view, encontraras 3 carpetas más.";
    $arrMensaje[12] = "<br/>11. Abre la carpeta js, como te indico la linea 15 de el archivo viewInterfaz.php .";
    $arrMensaje[13] = "<br/>12. Ahora abre el archivo scriptInterfaz.js";
    $arrMensaje[14] = "<br/>13. Ahora lee la linea 59.(Este es un evento ajax)";
    $arrMensaje[15] = "<br/>14. Ahora lee la linea 60.(Esta url, sera la carpeta a la que nos dirigiremos. '../controller/controllerInterfaz.php' )";
    $arrMensaje[16] = "<br/>15. Vuelve al explorador de archivos...";
    $arrMensaje[17] = "<br/>16. Abre la carpeta controller.(Esta a la misma altura de la carpeta view)";
    $arrMensaje[18] = "<br/>17. Abre el archivo controllerInterfaz.php";
    $arrMensaje[19] = "<br/>18. Lee la linea 6.";
    $arrMensaje[20] = "<br/>19. Dirigete a la linea 17.";
    $arrMensaje[21] = "<br/>Ahora saludame, soy el script que se esta generando desde el controllerInterfaz.php , y estoy hecho en PHP.(Este fue el ultimo paso)";
    $mensaje = $arrMensaje[$indice];
    return $mensaje;
  }

  function mensajeModelo($datos){
    include "../model/modelInterfaz.php";
    $obj = new mensaje();
    return $obj->mostrarMensaje($datos["indice"]);
  }

?>