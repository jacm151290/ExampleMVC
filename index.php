<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Login</title>
    <link rel="stylesheet" href="view/css/estilosGenerales.css"/>
    <link rel="stylesheet" href="view/css/estiloLogin.css"/>
</head>
<body>
    <div id="divLogin" >
        <form action="view/viewInterfaz.php" id="frmLogin"  method="post">
            <span>
                <h1>tu nombre:</h1>
            </span>
            <input type="text" name="txtNombre" id="txtNombre"/>
            <br>
            <input type="submit" id="btnIngresar" name="btnIngresar" value="Ingresar"/>
        </form>
    </div>
</body>
</html>
