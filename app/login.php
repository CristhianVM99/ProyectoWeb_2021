<?php
    require_once('../config.php')
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Acceso</title>
    <link rel="stylesheet" type="text/css" href="<?= APP_URL?>assets/css/app.css">
    <link rel="stylesheet" href="<?= APP_URL?>assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="<?= APP_URL?>assets/css/brands.min.css">
</head>
<body>
    <div class="cont_login">
        <div class="form_login">
            <img class="blog_log" src="<?= APP_URL?>assets/img/leon4.png" alt="logo de mi blog">
            <h2>FORMULARIO DE ACCESO</h2>
            <form action="<?= APP_URL?>app/autenticar.php" method="POST">
                <!-- USERNAME -->
                <input type="hidden" name="operacion" value="login">
                <label for="">
                    USUARIO
                </label>
                <input id="usr" name="usr" type="text">
    
                <!-- PASSWORD -->
                <label for="">
                    CONTRASEÑA
                </label>
                <input id="pwd" name="pwd" type="password">
                <button type="submit">
                    <i class="fas fa-sign-in-alt"></i>
                    Ingresar
                </button>
                <!-- <input type="submit" value="log In"> -->
            </form>
        </div>
    </div>

</body>
</html>