<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "usuario_bd";
$password = "contrasena_bd";
$dbname = "nombre_bd";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Error de conexión: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];

// Encriptar la contraseña (opcional)
$contrasena_encriptada = password_hash($contrasena, PASSWORD_DEFAULT);

// Preparar la consulta SQL
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, email, contrasena) VALUES (?, ?, ?)");

// Vincular los datos a la consulta
$stmt->bind_param("sss", $nombre, $email, $contrasena_encriptada);

// Ejecutar la consulta
$stmt->execute();

// Cerrar la conexión
$conn->close();

// Redirigir al usuario a una página de confirmación
header("Location: registro_exitoso.html");

?>



