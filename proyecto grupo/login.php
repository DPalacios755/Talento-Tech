<?php
    include("Conexion.php");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
    <nav class="formulario">
        <div class="formulario__login">

            <form action="loginandregister/login.php" method="POST">

                <h2>Bike Moto´R</h2>

                <label class="label" for="">Correo: </label>
                <input name="email" type="email" placeholder="moiseslunaaroca@gmail.com">

                <label class="label" for="">Contraseña: </label>
                <input name="pass" type="password" placeholder="123456789">

                <input class="btn__login" name="btn__ingresar" type="submit" value="Ingresar">

                <div class="register">
                <p>¿No tienes una cuneta?</p><a href="registro.php">Registrarme</a>
                </div>
                
            </form>
        </div>
    </nav>
</body>
</html>