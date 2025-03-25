<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/registro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
    <nav class="formulario">
        <div class="formulario__login">

            <form action="loginandregister/registro.php" method="POST">

                <h2>Bike Moto´R</h2>

                <label class="label" for="">Correo: </label>
                <input name="email" type="email" placeholder="moiseslunaaroca@gmail.com">

                <label class="label" for="">Nombre: </label>
                <input name="name" type="text" placeholder="Jaime Angulo">

                <label class="label" for="">Contraseña: </label>
                <input name="pass" type="password" placeholder="123456789">

                <input class="btn__login" name="btn__registrar" type="submit" value="Registrarme">

                <div class="register">
                <p>¿Ya tienes una cuneta?</p><a href="login.php">Ingresar</a>
                </div>
                
            </form>
        </div>
    </nav>
</body>
</html>