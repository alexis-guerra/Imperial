<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitio";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$nombre = $_POST['name'];
$correo = $_POST['email'];
$mensaje = $_POST['message'];

$sql = "INSERT INTO servicios (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

if ($conn->query($sql) === TRUE) {
 echo "Nuevo contacto insertado";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>