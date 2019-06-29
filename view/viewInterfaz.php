<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta http-equiv="Expires" content="0">
      <meta http-equiv="Last-Modified" content="0">
      <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
      <meta http-equiv="Pragma" content="no-cache">
      <title>Vista de Interfaz</title>
      <link rel="stylesheet" href="css/estilosGenerales.css">
      <link rel="stylesheet" href="css/estilosInterfaz.css">
      <script src="js/jquery.js"></script>
      <script src="js/scriptInterfaz.js"></script>
      
    </head>
    <body>
      <input type="hidden" name="hidParpadear" id="hidParpadear" value="0"/>
      <div id="divProcesos">
        <table id="tblConsolaInformacion" border="1">
          <thead>
            <tr>
              <th> <span>Bienvenid@ <?php $_POST["txtNombre"]="JACM"; echo $_POST["txtNombre"]; ?> </span> </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td id="tdConsole">
                <div id="divInstrucciones">Comenzemos...</div>
                <span id="spanParpadear">
                  Start
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <br/><br/>
      <div id="divBotonera">
          <button id="btnClear">Limpiar</button>
          <button id="btnView">Vista</button>
          <button id="btnController">Controlador</button>
          <button id="btnModel">Modelo</button>
        </div>
    </body>
  </html>