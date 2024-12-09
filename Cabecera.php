<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>IMPERIAL</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
  <link rel="stylesheet" href="assets/css/newstyless.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <style>
    /* Cabecera Estilo */
    .header-area {
      background-color: #003366; /* Azul oscuro */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .header-container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 10px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .logo h1 {
      font-family: 'Poppins', sans-serif;
      font-size: 28px;
      color: #fff;
      margin: 0;
    }

    .nav {
      list-style-type: none;
      padding: 0;
      margin: 0;
      display: flex;
      gap: 15px;
    }

    .nav li a {
      color: #fff;
      font-size: 16px;
      font-weight: 500;
      text-decoration: none;
      text-transform: uppercase;
      padding: 5px 10px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    .nav li a:hover {
      background-color: #d9534f;
    }

    /* Menú móvil */
    .menu-trigger {
      display: none;
      color: #fff;
      font-size: 22px;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .nav {
        display: none;
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
        background-color: #003366;
        padding: 10px;
        border-radius: 5px;
      }

      .nav.active {
        display: flex;
      }

      .menu-trigger {
        display: block;
      }
    }
  </style>
</head>

<body>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area">
    <div class="header-container">
      <!-- Logo -->
      <a href="inicio.php" class="logo">
        <h1>IMPERIAL</h1>
      </a>

      <!-- Menú principal -->
      <nav>
        <ul class="nav">
          <li><a href="inicio.php">Inicio</a></li>
          <li><a href="extraescolares.php">Extraescolares</a></li>
          <li><a href="maestros.php">Maestros</a></li>
          <li><a href="eventos.php">Eventos</a></li>
          <li><a href="servicios.php">Servicios Escolares</a></li>
          <li><a href="inscripcion.php">Inscripción</a></li>
          <li><a href="reticula.php">Retículas Escolares</a></li>
          <li><a href="tutorias.php">Tutorías Escolares</a></li>
          <li><a href="departamentos.php">Departamentos Escolares</a></li>
          <li><a href="calendario.php">Calendario Académico</a></li>
          <li><a href="noticias.php">Noticias Escolares</a></li>
          <li><a href="reglamento.php">Reglamento Escolar</a></li>
        </ul>
      </nav>

      <!-- Menú móvil -->
      <a href="javascript:void(0);" class="menu-trigger" onclick="toggleMenu()">
        <span>☰</span>
      </a>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- Bootstrap JS -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    function toggleMenu() {
      const nav = document.querySelector('.nav');
      nav.classList.toggle('active');
    }
  </script>

</body>
</html>
