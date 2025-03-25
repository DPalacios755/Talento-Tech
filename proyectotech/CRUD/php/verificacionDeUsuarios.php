<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'proyectotech';
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error de conexión a la base de datos: " . mysqli_connect_error());
}

if (isset($_POST['Email']) && isset($_POST['Contraseña'])) {
    $email = $_POST['Email'];
    $password = $_POST['Contraseña'];
    $rol = $_POST['rol'];
    

    $consulta = "SELECT * FROM user WHERE Email = '$email' AND Contraseña = '$password' ";
    $resultado = mysqli_query($conn, $consulta);

    if ($resultado->num_rows > 0) 
    {
       // Usuario encontrado, iniciar sesión
       session_start();
       $_SESSION['user'] = $email;
       $row = $resultado->fetch_assoc();
       $_SESSION['rol'] = $row['rol'];
   
       // Redirigir según el rol
       if ($_SESSION['rol'] == 'Administrador') {
           header("Location: index.php");
       } else {
           header("Location: http://localhost/proyectotech/CRUD/html/inicio.html");
       }
   } else {
       // Usuario o contraseña incorrectos
       echo "Usuario o contraseña incorrectos.";
   }
}

   $conn->close();
   ?>