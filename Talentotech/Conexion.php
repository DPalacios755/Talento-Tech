<?php
// Datos de conexión a la base de datos
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

$nombre = $_POST["Email"];
$password = $_POST["Contraseña"];

$query = mysqli_query($conn,"select * FROM user WHERE Email ='".$nombre."' and Contraseña ='".$password."'");

$nr = mysqli_num_rows($query);

if($nr == 1)
{
//    header("location: login.html"); // sirve para recargar la pagina inicial
    echo "Bienvenido: " .$nombre. " Ingreso Exitoso!!!";
}
else if ($nr == 0)
{
  //  header("location: login.html"); //sirve para recargar la pagina inicial
  //  echo "No ingreso los Datos Correctos por favor Valide.";
    echo "<script> alert('Error: No ingreso los Datos Correctos por favor Valide.');window.location= 'proyecto_talentotech.html' </script>";
}
?>