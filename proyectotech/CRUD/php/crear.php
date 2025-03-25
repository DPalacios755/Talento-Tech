<?php
include('conexionBase.php');

    $nombre = $_POST["txnombre"];
    $correo= $_POST["Email"];
    $Contraseña = $_POST["password"];
    $rol = $_POST["rol"];

    
$query = mysqli_query ($conn," INSERT INTO user VALUES ( '".$nombre."','".$correo."','".$Contraseña."' , '".$rol."')");


echo "<script> alert('Bienvenido: Su creacion de usuario fue Exitoso!!!');window.location= 'index.php' </script>";


// Cerrar la conexión
mysqli_close($conn);

?>