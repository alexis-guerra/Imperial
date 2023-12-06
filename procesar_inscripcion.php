<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitio";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$tipoTransferencia = $_POST['tipoTransferencia'];
$numeroTransferencia = $_POST['numeroTransferencia'];
$numeroReferencia = $_POST['numeroReferencia'];
$numeroCedula = $_POST['numeroCedula'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO inscripcion (nombre, apellidos, tipoTransferencia, numeroTransferencia, numeroReferencia, numeroCedula)
VALUES ('$nombre', '$apellidos', '$tipoTransferencia', '$numeroTransferencia', '$numeroReferencia', '$numeroCedula')";

if ($conn->query($sql) === TRUE) {
    echo "Inscripción realizada con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>