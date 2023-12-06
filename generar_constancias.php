<?php
// Información de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sitio";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Si el usuario envía los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recuperación de los datos del formulario
    $nombre = $_POST["name"];
    $apellidos = $_POST["surname"];
    $correo = $_POST["email"];
    $descripcion = $_POST["descripcion"];

    // Creación de una consulta SQL
    $sql = "INSERT INTO constancias (nombre, apellidos, correo, descripcion) VALUES ('$nombre', '$apellidos', '$correo', '$descripcion')";

    // Ejecución de la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Registro guardado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}

?>