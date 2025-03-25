<?php
// requiere la conexion

require "Conexion.php";

// Inicia la sesión
session_start();

// Verifica si el usuario está logeado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {

    // Si no está logeado, redirige al formulario de inicio de sesión
    
    header("Location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Motor´R</title>
</head>
<body>
    
    <nav class="nav__menu">
        <div class="nav__div">
            <h1 class="nav__h1">Bike Moto´R</h1>
            <ul class="nav__ul">
                <li class="nav__item">
                    <a class="nav__link" href="">Inicio</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="">Motos</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="">Nosotros</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="cerrar.php">Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="banner">
        <h2 class="titulo__2" >TODO SOBRE LAS MEJORES MOTOS DEL MOMENTO</h2>
        <p>¿Que es esperas? Mira nuetro catalogo y disfruta de las mejores motos del año...</p>
        <a class="enlace" href="#catalogo">Ver más</a>
    </div>


    <div class="container">
        <h3 id="catalogo">CATALOGO</h3>
            <section class="cajas">
        
                <div class="box__1">
                    <img src="img/cb600.jpg" alt="">
                    <a href="">Información</a>
                    
                </div>

                <div class="box__1">
                    <img src="img/z1000.jpg" alt="">
                    <a href="">Información</a>
                </div>

                <div class="box__1">
                    <img src="img/mt09.jpg" alt="">
                    <a href="">Información</a>
                </div>

                <div class="box__1">
                    <img src="img/ninja1000.jpg" alt="">
                    <a href="">Información</a>
                </div>
        </section>
    </div>


    <div class="formulario">
        <h2 id="contacto">CONTACTO</h2>
        <form action="">

            <label class="label">Nombre: </label>
            <input type="text" placeholder="Name">

            <label class="label">Correo: </label>
            <input type="email" placeholder="Email">

            <label class="label">Telefono: </label>
            <input type="tel" placeholder="Number phone">

            <label class="label" for="cars">Moto:</label>
            <select name="moto" id="motos">
                <option value="Select">Seleccionar</option>
                <option value="Honda">Cbr1000RR</option>
                <option value="Kawazaki">Z1000</option>
                <option value="Yamaha">MT09</option>
                <option value="Kawazaki">NINJA1000</option>
            </select>

            <label class="label">Color: </label>
            <input class="color" type="color">

            <label class="label">Mensaje: </label>
            <textarea name="" id="" placeholder="Your message"></textarea>

            <input type="submit" value="ENVIAR">

        </form>
    </div>

    <footer>
        <p><a class="link" href="mailto:hege@example.com">Daniel Palacio</a></p>
        <p><a class="link" href="mariaosa21@hotmail.com">Jefferson Luna</a></p>
        <p><a class="link" href="mailto:hege@example.com">example</a></p>
        <p><a class="link" href="mailto:hege@example.com">example</a></p>
    </footer>

</body>
</html>