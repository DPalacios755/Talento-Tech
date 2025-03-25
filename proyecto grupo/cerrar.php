<?php 
session_start(); // Inicia la sesión

// Verifica si el usuario está logeado
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    // Si está logeado, destruye la sesión
    session_destroy();
}

// Redirige al usuario a la página de inicio de sesión
header("Location: login.php");
exit;
?>