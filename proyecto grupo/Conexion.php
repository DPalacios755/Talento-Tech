<?php

$server = "localhost";
$username = "root";
$pass = "";
$db = "talento";

$conn = mysqli_connect($server, $username, $pass, $db);

if(!$conn) {
    die ("conexión fallida: " .mysqli_connect_error());
}

?>