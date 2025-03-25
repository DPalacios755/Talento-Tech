<?php
include'Conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $password = $_POST['password'];
}
    $sql = "SELECT id, user, password FROM user WHERE Nombre_Completo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if (password_verify($password)){ 
    }
    else {
        echo "<h2>Error: Usuario o contraseña incorrectos.";
    }
}

?>