<?php
$servername = "localhost";
$username = "carlos";
$password = "carlos";
$dbname = "bbdd";

// Crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexion
if ($conn->connect_error) {
    die("Conexion fallida: " . $conn->connect_error);
}
echo "Conexion exitosa";
?>
