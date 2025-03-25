<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'proyectotech';

// Crear la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) 
{
    die("La conexión ha fallado: " .mysqli_connect_error());
}

    $nombre = $_POST["txnombre"];
    $correo= $_POST["Email"];
    $Contraseña = $_POST["password"];

    
$query = mysqli_query ($conn," INSERT INTO user VALUES ( '".$nombre."','".$correo."','".$Contraseña."')");


echo "<script> alert('Bienvenido: Su Registro ha sido Exitoso!!!');window.location= 'http://localhost/proyectotech/CRUD/html/inicio.html' </script>";


// Cerrar la conexión
mysqli_close($conn);

?>