<?php

session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://localhost/proyectotech/CRUD/css/indexphp.css">
    <title>CRUD</title>
</head>
<body>
    <h1>Lista de usuarios</h1>

    <?php
    
    //Incluir archivo de conexión a la base de datos
    include('conexionBase.php');

        // Consulta SQL para seleccionar todos los datos
        $sql = "SELECT * FROM user ";
        $result = $conn -> query ($sql);

        if ($result->num_rows > 0) {
            echo "<table border 8>";
            echo "<tr><th>Nombre_Completo</th><th>Email</th><th>Contraseña</th><th>Tipo de Usuario</th><th>Funciones</th></tr>";

            // Mostrar cada fila de datos
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['Nombre_Completo']."</td>";
                echo "<td>". $row['Email'] . "</td>";
                echo "<td>" . $row['Contraseña'] . "</td>";
                echo "<td>" . $row['rol'] . "</td>";
                echo "<td>";
                echo"<a href='editarUsuario.php? email=" . $row['Email'] ." '>
                <button> Editar </button>
                </a>";
                 // Botón de editar
                
                echo "<a href='Eliminar.php?  email=" . $row['Email'] ."'> 
                <button>Eliminar </button>
                </a>";
                echo "</td>";
                echo "</tr>";
            }
            
            echo"<a href='http://localhost/proyectotech/CRUD/html/Crearphp.html'>
            <button class='volver'> Crear </button>
            </a>";
            echo "<br>";
            echo "</br>";


            echo "</table>";
            echo "<br>";
            echo "</br>";
            echo"<a href='http://localhost/proyectotech/CRUD/html/inicio.html'>
            <button class='volver'> Salir </button>
            </a>";
            
        } else {
            echo "No hay usuarios creados.";
        }
        

    ?> 

</body>
</html>