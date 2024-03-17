<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usuarios";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Obtener los usuarios de la base de datos
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

// Cerrar la conexión
$conn->close();

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Usuarios Registrados</title
