<?php
include ("../config/conn.php");
error_reporting(0);
session_start();

if(isset($_SESSION["usuario"])){
    header("Location: registrar.php");
    exit();
}

if(isset($_POST["register"]))
{
    // Conexión segura a la base de datos
    include 'conexion.php'; // Asegúrate de que este archivo contiene la conexión a la base de datos con mysqli

    $usuario = trim(htmlspecialchars($_POST["usuario"]));
    $email = trim(htmlspecialchars($_POST["email"]));
    $contraseña = trim($_POST["contraseña"]);
    $password = trim($_POST["password"]);

    // Validación del formato del correo
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Correo electrónico no válido');</script>";
        exit();
    }

    // Validación de campos vacíos
    if (empty($usuario) || empty($email) || empty($contraseña) || empty($password)) {
        echo "<script>alert('Todos los campos son obligatorios');</script>";
        exit();
    }

    // Validación de contraseñas coincidentes
    if($contraseña !== $password) {
        echo "<script>alert('Las contraseñas no coinciden');</script>";
        exit();
    }

    // Verificar si el correo ya está registrado
    $SentenciaSQL = $conexion->prepare("SELECT * FROM registro WHERE email = ?");
    $SentenciaSQL->bind_param("s", $email);
    $SentenciaSQL->execute();
    $resultado = $SentenciaSQL->get_result();

    if($resultado->num_rows > 0) {
        echo "<script>alert('El correo ya está registrado');</script>";
        $SentenciaSQL->close();
        $conexion->close();
        exit();
    }

    // Insertar nuevo usuario de forma segura
    $SentenciaSQL = $conexion->prepare("INSERT INTO registro (usuario, email, contraseña) VALUES (?, ?, ?)");
    $SentenciaSQL->bind_param("sss", $usuario, $email, $contraseña);

    if($SentenciaSQL->execute()) {
        // Registra la sesión del usuario
        session_start();
        $_SESSION["usuario"] = $usuario;
        echo "<script>alert('Usuario registrado correctamente');</script>";

        // Redirige a inicio.php
        header("Location: /Imperial/inicio.php");
        exit();
    } else {
        echo "<script>alert('Hubo un error al registrar el usuario');</script>";
    }

    $SentenciaSQL->close();
    $conexion->close();
}
?>

<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Registrar</h2>

  <form class="login-container" method="post">
    <p><input type="email" name="email" placeholder="Email" required></p>
    <p><input type="text" name="usuario" placeholder="Usuario" required></p>
    <p><input type="password" name="contraseña" placeholder="Contraseña" required></p>
    <p><input type="password" name="password" placeholder="Repetir contraseña" required></p>
    <p><input type="submit" name ="register" value="Registrar"></p>
    <link rel="stylesheet" href="registro.css">
  </form>
</div>