
<?php

// Incluir archivo de conexión a la base de datos
include('conexionBase.php');

// Recibir el ID del usuario
$idUsuario = $_GET['email'];

// Consulta SQL para eliminar el usuario
$sql = "DELETE FROM user WHERE Email = '$idUsuario'";

// Ejecutar la consulta SQL
$resultado = mysqli_query($conn, $sql);

if ($resultado) {
    echo "<script>alert('Usuario eliminado correctamente.');window.location='index.php';</script>";
} else {
    echo "<script>alert('Error: No se pudo eliminar el usuario.');</script>";
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);

?>