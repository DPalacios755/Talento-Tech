<?php
echo "<link rel='stylesheet' href='http://localhost/proyectotech/CRUD/css/editarphp.css'>";
// Incluir archivo de conexión a la base de datos
include('conexionBase.php');

// Recibir el ID del usuario
$idUsuario = $_GET['email'];


// Consulta SQL para obtener los datos del usuario
$sql = "SELECT * FROM user  WHERE Email = '$idUsuario'" ; // Use 'id' instead of 'Email'
$result = mysqli_query($conn, $sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    echo "<h1>Editar Usuario</h1>";
    echo "<form action='editarUsuario.php?  email='$idUsuario' method='post'>";
    echo "<label for='nombreCompleto'>  Nombre Completo:  </label>";
    echo "<input type='text' id='nombreCompleto' name='nombreCompleto' value='" . $row['Nombre_Completo'] . "'>";
    echo "<label for='email'>  Email:  </label>";
    echo "<input type='email' id='email' name='email' value='" . $row['Email'] . "'>"; 
    echo "<label for='password'>  Contraseña:  </label>";
    echo "<input type='password' id='password' name='password' value='" . $row['Contraseña'] . "'>";
    echo "<label for='password'>  Tipo de Usuario:  </label>";
    echo "<input type='text' id='rol' name='rol' value='" . $row['rol'] . "'>";
    echo "<br></br>";
    echo "<input class='boton 'type='submit' value='Guardar Cambios'>";
    echo "</form>";
} else {
    echo "Usuario no encontrado.";
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibe los datos del formulario
    
    $email = $_POST['email'];
    $username = $_POST['nombreCompleto'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];
    

    // Prepara la consulta SQL para actualizar los datos
    $sql = "UPDATE user SET Contraseña='$password', Nombre_completo='$username' , rol='$rol'  WHERE Email='$email'";

    if ($conn->query($sql) === TRUE) {
        // Si la actualización fue exitosa, redirige a la página principal o muestra un mensaje de éxito
        header('Location: index.php');
    } else {
        // Si hubo un error en la consulta SQL, muestra un mensaje de error o maneja la situación adecuadamente
        echo "Error updating record: " . $conn->error;
    }
}
?>


