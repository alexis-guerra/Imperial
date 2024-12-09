<?php
include ("../config/conn.php");
error_reporting(0);
session_start();

if(isset($_SESSION["usuario"])){
    header("Location: inicio.php");
    exit();
}

if(isset($_POST["login"])) {
    // Conexión segura a la base de datos
    include 'conexion.php'; // Asegúrate de que este archivo contiene la conexión a la base de datos con mysqli

    $usuario_o_email = trim(htmlspecialchars($_POST["usuario_o_email"]));
    $contraseña = trim($_POST["contraseña"]);

    // Validación de campos vacíos
    if (empty($usuario_o_email) || empty($contraseña)) {
        echo "<script>alert('Todos los campos son obligatorios');</script>";
        exit();
    }

    // Validación de formato del correo solo si se ingresa un email
    if (filter_var($usuario_o_email, FILTER_VALIDATE_EMAIL)) {
        $SentenciaSQL = $conexion->prepare("SELECT * FROM registro WHERE email = ?");
    } else {
        $SentenciaSQL = $conexion->prepare("SELECT * FROM registro WHERE usuario = ?");
    }

    $SentenciaSQL->bind_param("s", $usuario_o_email);
    $SentenciaSQL->execute();
    $resultado = $SentenciaSQL->get_result();

    if($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();

        // Verificación de la contraseña (sin encriptación)
        if ($contraseña == $usuario['contraseña']) {
            // Inicio de sesión exitoso
            session_start();
            $_SESSION["usuario"] = $usuario['usuario'];
            echo "<script>alert('Inicio de sesión exitoso'); window.location.href='/Imperial/inicio.php';</script>";
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta');</script>";
            exit();
        }
    } else {
        echo "<script>alert('Usuario o correo no encontrado');</script>";
        exit();
    }

    $SentenciaSQL->close();
    $conexion->close();
}

?>


<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Iniciar Sesión</h2>

  <form class="login-container" method="post" action="login.php">
    <p><input type="text" name="usuario_o_email" placeholder="Email" required></p>
    <p><input type="password" name="contraseña" placeholder="Contraseña" required></p>
    <p><input type="submit" name="login" value="Iniciar Sesión"></p>
    <p><button type="button" onclick="window.location.href='registrar.php';" class="secondary-button">Registrarse</button></p>
    <link rel="stylesheet" href="login.css">
  </form>
</div>

<style>
  .secondary-button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
  }
  .secondary-button:hover {
    background-color: #0056b3;
  }
</style>