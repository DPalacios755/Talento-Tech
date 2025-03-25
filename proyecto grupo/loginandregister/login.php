<?php 

session_start();

include("../Conexion.php");

if(isset($_POST['btn__ingresar'])) {
    $email = $_POST['email'];
    $password = md5 ($_POST['pass']);

    $sql = $conn->query("SELECT * FROM user_login WHERE correo='$email' and contraseña='$password'");

    if($datos=$sql->fetch_object()) {
        $_SESSION['loggedin'] = true; // Establece la variable de sesión como true
        $_SESSION['user_email'] = $email; // Guarda el email del usuario en la sesión
        $_SESSION['user_id'] = $datos->id; // Guarda el ID del usuario en la sesión
        header("location: ../index.php");
        exit;
    } else {
        echo "<script>alert('Por favor verifica que los datos sean correctos e inténtalo de nuevo'); window.location.href = '../login.php';</script>";
        exit; // Detiene la ejecución del script PHP
    }
}



?>


