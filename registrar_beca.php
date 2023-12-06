<?php

// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "sitio");

// Verificación de la conexión
if (mysqli_connect_errno()) {
    echo "Error de conexión: " . mysqli_connect_error();
}

// Si el usuario envía los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recuperación de los datos del formulario
    $beca = $_POST["text"];
    $nombre = $_POST["author"];
    $correo = $_POST["email"];

    // Creación de una consulta SQL
    $sql = "INSERT INTO becas (beca, nombre, correo) VALUES ('$beca', '$nombre', '$correo')";

    // Ejecución de la consulta
    if (mysqli_query($conexion, $sql)) {
        echo "Registro guardado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}

?>