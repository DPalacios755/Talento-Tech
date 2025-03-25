<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'ProyectoTech';

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) 
{
    die("La conexión ha fallado: " .mysqli_connect_error());
}

    $nombre = $_POST["txnombre"];
    $correo= $_POST["Email"];
    $password = $_POST["Contraseña"];

    
$query = mysqli_query ($conn," INSERT INTO user VALUES ( '".$nombre."','".$correo."','".$password."')");


echo "<script> alert('Bienvenido: Su Registro ha sido Exitoso!!!');window.location= 'proyecto_talentotech.html' </script>";


// Cerrar la conexión
mysqli_close($conn);

?>