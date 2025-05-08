<?php
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);
    include('core/inc/funciones.inc.php');
    include('core/secure/ips.php');
    $archivo = "./logs/log.log";
    $ip = ip_in_ranges($_SERVER["REMOTE_ADDR"], $rango);
?>
<!DOCTYPE html>
<html lang="es-SV">
    <head>
        <title> INICIO DE SESIÓN: ROMEO MÉNDEZ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="fonts/fontawesome/css/all.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="sweetalert.all.js"></script>
        <script type="text/javascript" src="fonst/fontawesome/js/all.js"></script>

    </head>
    
    <body class="bg-light">
        <div class="alert alert-warning" role="alert">
            <b>¡Bienvenido!</b> <br> Por favor inicie sesión para continuar

        </div>

        <div class="form-row">
            <div class="form-group col-md-5 text-center">
                <img src="media/logo/logo_corporativo.png" class="mx-auto d-block" id="img" width="65%" height="auto">
            </div>
            <div class="form-group col-md-5 ml-4 mr-4 justify-content-center align-self-center">
                <h1>Diseñando Estrategias para la Recuperación y Migración de Base de Datos (RBK0)</h1>
                <form name="frm-_iniciar_sesion" id="frm-_iniciar_sesion" method="post" action="core/process.php">
                    <div class="form-group">
                        <label for="txt_user">Usuario</label>
                        <input type="text" class="form-control" id="txt_user" name="txt_user" aria-describedby="txt_userHelp" placeholder="Ingrese su usuario" maxlength="10" required>
                        <small id="txt_userHelp" class="form-text text-muted">Digite su usuario(Campo Obligatorio)</small>
                    </div>
                    <div class="form-group">
                        <label for="txt_pass">Contraseña:</label>
                        <input type="password" class="form-control" id="txt_pass" name="txt_pass" aria-describedby="txt_passHelp" placeholder="Ingrese su usuario" maxlength="10" required>
                        <small id="txt_passHelp" class="form-text text-muted">Digite su contraseña(Campo Obligatorio)</small>
                    </div>
                    <button type="submit" id="btn_ingresar" class="btn btn-primary mx-auto d-block " value="ingresar">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </body>
</html>