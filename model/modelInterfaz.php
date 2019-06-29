<?php

class mensaje{
  private $arrMensaje = array();

  function __construct(){
    
    $this->arrMensaje[0] = "<br/><span class='spanView'>Hola, este boton solo te deja ver que estas en el controlador.</span>";
    $this->arrMensaje[1] = "<br/>Te güio...";
    $this->arrMensaje[2] = "<br/>1. Abre el explorador de Archivos";
    $this->arrMensaje[3] = "<br/>2. Ve al disco C o Raiz Local";
    $this->arrMensaje[4] = "<br/>3. Abre la carpeta XAMPP";
    $this->arrMensaje[5] = "<br/>4. Abre la carpeta HTDOCS";
    $this->arrMensaje[6] = "<br/>5. Abre la carpeta ExampleMVC";
    $this->arrMensaje[7] = "<br/>6. Abre la carpeta view";
    $this->arrMensaje[8] = "<br/>7. Abre el archivo viewInterfaz.php";
    $this->arrMensaje[9] = "<br/>8. En el archivo viewInterfaz.php, lee la linea 15...";
    $this->arrMensaje[10] = "<br/>9. Vuelve al explorador de archivos...";
    $this->arrMensaje[11] = "<br/>10. En la carpeta view, encontraras 3 carpetas más.";
    $this->arrMensaje[12] = "<br/>11. Abre la carpeta js, como te indico la linea 15 de el archivo viewInterfaz.php .";
    $this->arrMensaje[13] = "<br/>12. Ahora abre el archivo scriptInterfaz.js";
    $this->arrMensaje[14] = "<br/>13. Ahora lee la linea 59.(Este es un evento ajax)";
    $this->arrMensaje[15] = "<br/>14. Ahora lee la linea 60.(Esta url, sera la carpeta a la que nos dirigiremos. '../controller/controllerInterfaz.php' )";
    $this->arrMensaje[16] = "<br/>15. Vuelve al explorador de archivos...";
    $this->arrMensaje[17] = "<br/>16. Abre la carpeta controller.(Esta a la misma altura de la carpeta view)";
    $this->arrMensaje[18] = "<br/>17. Abre el archivo controllerInterfaz.php";
    $this->arrMensaje[19] = "<br/>18. Lee la linea 8.";
    $this->arrMensaje[20] = "<br/>19. Ahora lee la linea 44.(Esta url, sera la carpeta a la que nos dirigiremos. '../model/modelInterfaz.php' )";
    $this->arrMensaje[21] = "<br/>20. Vuelve al explorador de archivos...";
    $this->arrMensaje[22] = "<br/>21. Abre la carpeta model.(Esta a la misma altura de la carpeta view)";
    $this->arrMensaje[23] = "<br/>22. Ahora abre el archivo modelInterfaz.php";
    $this->arrMensaje[24] = "<br/>23. Lee la linea 8.";
    $this->arrMensaje[25] = "<br/>Ahora saludame, soy el script que se esta generando desde el modelInterfaz.php , y estoy hecho en PHP.(Este fue el ultimo paso)";
  }

  public function mostrarMensaje($indice){
    return $this->arrMensaje[$indice];
  }
  
};
