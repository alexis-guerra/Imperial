<?php include(realpath('./Cabecera.php'));?>

<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Inscripcion Escolar</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/estileeeeetos.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">


    </head>


    <body>
    <section class="section" id="schedule">
  
    <h1>Inscripcion Escolar</h1>
    <form id="formulario">
        <div class="contenedor">
            <label for="nombre">Nombre del interesado</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="contenedor">
            <label for="apellido">Apellido</label>
            <input type="text" id="apellido" name="apellido" required>
        </div>
        <div class="contenedor">
            <label for="tipo_transferencia">Tipo de Transferencia</label>
            <select id="tipo_transferencia" name="tipo_transferencia" required>
                <option value="transferencia_online">Transferencia Online</option>
                <option value="pago_movil">Pago Movil</option>
                <option value="otra">Otra</option>
            </select>
        </div>
        <div class="contenedor">
            <label for="numero_transferencia">Número de Transferencia</label>
            <input type="text" id="numero_transferencia" name="numero_transferencia" required>
        </div>
        <div class="contenedor">
            <label for="numero_referencia">Numero telefonico de referencia</label>
            <input type="text" id="numero_referencia" name="numero_referencia" required>
        </div>
        <div class="contenedor">
            <label for="cedula_representante">No. Cédula Representante</label>
            <input type="text" id="cedula_representante" name="cedula_representante" required>
        </div>
        <div class="contenedor">
            <input type="submit" value="Enviar">
        </div>
    </form>
</section>
    </body>
</html>
<?php include(realpath("./pie.php"));?>
