<?php
include("../conexion.php");

if(isset($_POST['btn__registrar'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = md5 ($_POST['pass']);

    // Verifica si el correo ya está registrado
    $sql_check_email = $conn->query("SELECT * FROM user_login WHERE correo='$email'");

    if($sql_check_email->num_rows > 0) {
        // Si el correo ya está registrado, muestra un mensaje de error y redirige al formulario de inicio de sesión
        echo "<script>alert('El correo ya está registrado, por favor inicie sesón.'); window.location.href = '../login.php';</script>";
        exit;
    }

    // Si el correo no está registrado, procede a insertar el nuevo usuario
    $sql_insert_user = $conn->query("INSERT INTO user_login (correo, nombre, contraseña) VALUES ('$email', '$name', '$password')");

    if($sql_insert_user) {
        // Si la inserción fue exitosa, muestra un mensaje de éxito y redirige al formulario de inicio de sesión
        echo "<script>alert('Usuario creado correctamente, inicia sesión.'); window.location.href = '../login.php';</script>";
        exit;
    } else {
        // Si ocurrió un error durante la inserción, muestra un mensaje de error y redirige al formulario de inicio de sesión
        echo "<script>alert('Error al registrar usuario, por favor intenta de nuevo.'); window.location.href = '../registro.php';</script>";
        exit;
    }
}
?>
