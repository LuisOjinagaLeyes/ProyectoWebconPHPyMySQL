<?php
$nombre_registro = $_POST['nombre'];
$apellido_registro = $_POST['apellido'];
$correo_registro = $_POST['correo'];
$consulta_enviar = $_POST['consulta'];

// servidor SQL, usuario SQL, contraseña SQL, nombre BD (base de datos)

$conexión = mysqli_connect("localhost", "root", "", "phpintermedio") or exit ("No se pudo conectar con la Base de Datos");

mysqli_query($conexión, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_registro', '$apellido_registro', '$correo_registro', '$consulta_enviar')");

header("Location: contacto.php?ok");

?>