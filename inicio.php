<?php include(realpath('./Cabecera.php')); ?>

<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>IMPERIAL</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

    <!-- Custom Styles -->
    <style>
      /* Mejorando la cabecera */
      .main-banner {
        position: relative;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
        color: white;
      }

      .header-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
      }

      .main-button-red a {
        color: white;
        padding: 12px 25px;
        font-size: 18px;
        background-color: #d9534f;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      .main-button-red a:hover {
        background-color: #c9302c;
      }

      .navbar {
        margin-bottom: 30px;
      }

      /* Estilo para el pie de página */
      footer {
        background-color: #222;
        padding: 20px 0;
        color: white;
      }

      /* Estilos generales */
      body {
        font-family: 'Poppins', sans-serif;
        padding-top: 120px; /* Evita que el contenido quede oculto debajo de la cabecera */
        transition: background-color 0.3s ease, color 0.3s ease, font-size 0.3s ease, line-height 0.3s ease;
      }

      /* Menú lateral */
      #sideMenu {
        position: fixed;
        top: 0;
        left: -250px;
        width: 250px;
        height: 100%;
        background-color: #343a40;
        padding-top: 20px;
        z-index: 999;
        transition: left 0.3s ease;
      }

      #sideMenu.active {
        left: 0; /* Mueve el menú hacia la derecha cuando se activa */
      }

      #sideMenu a {
        color: #fff;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        display: block;
        transition: background-color 0.3s ease;
      }

      #sideMenu a:hover {
        background-color: #007bff;
      }

      #menuToggle {
        position: fixed;
        top: 20px;
        left: 20px;
        background-color: #007bff;
        color: white;
        padding: 10px 15px;
        font-size: 20px;
        cursor: pointer;
        border-radius: 5px;
        z-index: 1000;
        transition: left 0.3s ease;
      }

      /* Cuando el menú lateral está activo, mover el icono */
      #sideMenu.active + #menuToggle {
        left: 270px; /* Mueve el icono de menú fuera del área del menú lateral */
      }

      /* Opciones de accesibilidad */
      .menu-option {
        padding: 10px;
        cursor: pointer;
        color: white;
        background-color: #555;
        text-align: center;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      .menu-option:hover {
        background-color: #007bff;
      }

      /* Seguimiento del mouse */
      .mouse-follow {
        position: absolute;
        pointer-events: none;
        font-size: 35px;
        transition: transform 0.1s ease;
        display: none;
      }

      /* Efecto de escala de grises */
      .grayscale {
        filter: grayscale(100%);
      }

      /* Contraste alto */
      .high-contrast {
        filter: contrast(200%);
      }

      /* Estilo de los elementos del banner */
      .main-button-red a {
        color: white;
        padding: 12px 25px;
        font-size: 18px;
        background-color: #d9534f;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
      }

      /* Aplica cambios a los títulos y categorías */
      h1, h2, h3, h4, h5, h6, p, .category {
        transition: font-size 0.3s ease;
      }
    </style>
  </head>

  <body>

    <!-- Menú lateral -->
    <div id="sideMenu">
      <!-- Opciones de accesibilidad -->
      <div id="menuOptions">
        <div class="menu-option" id="toggleGrayscale">Escala de Grises</div>
        <div class="menu-option" id="toggleContrast">Contraste Alto</div>
        <div class="menu-option" id="toggleMouseFollow">Seguir Mi Mouse</div>
        <div class="menu-option" id="increaseFontSize">Aumentar Tamaño de Texto</div>
        <div class="menu-option" id="decreaseFontSize">Disminuir Tamaño de Texto</div>
        <div class="menu-option" id="increaseSpacing">Aumentar Espaciado</div>
        <div class="menu-option" id="decreaseSpacing">Disminuir Espaciado</div>
      </div>
    </div>

    <!-- Botón de menú -->
    <div id="menuToggle">☰</div>

    <!-- Section: Banner -->
    <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
        <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="caption">
                <h6>Hola Estudiantes</h6>
                <h2>Bienvenidos a IMPERIAL</h2>
                <p>En esta plataforma podrás administrar todos los aspectos como estudiante dentro de tu escuela. Lleva un orden en tu recorrido como estudiante y conoce más a fondo sobre tu escuela.</p>
                <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">¡Vamos!</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Menú de opciones -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">IMPERIAL</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Contenido Principal -->
    <section id="about">
      <!-- Aquí puedes agregar más contenido según lo desees -->
    </section>

    <!-- Footer -->
    <?php include(realpath("./pie.php")); ?>

    <!-- Bootstrap core JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
      // Abrir/cerrar el menú lateral
      document.getElementById('menuToggle').addEventListener('click', function() {
        document.getElementById('sideMenu').classList.toggle('active');
      });

      // Función para ajustar el espaciado (aumentar)
      document.getElementById('increaseSpacing').addEventListener('click', function() {
        document.querySelectorAll('#top').forEach(element => {
          element.style.lineHeight = '1.8'; // Aumentar espaciado solo en el contenido
        });
      });

      // Función para ajustar el espaciado (disminuir)
      document.getElementById('decreaseSpacing').addEventListener('click', function() {
        document.querySelectorAll('#top').forEach(element => {
          element.style.lineHeight = '1.2'; // Disminuir espaciado solo en el contenido
        });
      });

      // Función para aplicar o quitar el filtro de escala de grises
      document.getElementById('toggleGrayscale').addEventListener('click', function() {
        document.body.classList.toggle('grayscale');
      });

      // Función para aplicar o quitar el filtro de contraste alto
      document.getElementById('toggleContrast').addEventListener('click', function() {
        document.body.classList.toggle('high-contrast');
      });

      // Activar/desactivar la opción de seguimiento del mouse
      let mouseFollowEnabled = false;
      const mouseFollowElement = document.createElement('div');
      mouseFollowElement.textContent = '🔴';
      mouseFollowElement.classList.add('mouse-follow');
      document.body.appendChild(mouseFollowElement);

      document.getElementById('toggleMouseFollow').addEventListener('click', function() {
        mouseFollowEnabled = !mouseFollowEnabled;
        mouseFollowElement.style.display = mouseFollowEnabled ? 'block' : 'none';
      });

      // Mover el seguimiento del mouse
      document.addEventListener('mousemove', function(e) {
        if (mouseFollowEnabled) {
          mouseFollowElement.style.left = e.pageX + 'px';
          mouseFollowElement.style.top = e.pageY + 'px';
        }
      });

      // Ajuste de tamaño de texto: aumentar
      document.getElementById('increaseFontSize').addEventListener('click', function() {
        document.querySelectorAll('#top, #top h1, #top h2, #top h3, #top h4, #top h5, #top h6, #top p').forEach(element => {
          let currentFontSize = window.getComputedStyle(element).fontSize;
          let newFontSize = (parseFloat(currentFontSize) * 1.1) + 'px'; // Aumentar en un 10%
          element.style.fontSize = newFontSize;
        });
      });

      // Ajuste de tamaño de texto: disminuir
      document.getElementById('decreaseFontSize').addEventListener('click', function() {
        document.querySelectorAll('#top, #top h1, #top h2, #top h3, #top h4, #top h5, #top h6, #top p').forEach(element => {
          let currentFontSize = window.getComputedStyle(element).fontSize;
          let newFontSize = (parseFloat(currentFontSize) / 1.1) + 'px'; // Disminuir en un 10%
          element.style.fontSize = newFontSize;
        });
      });
    </script>
  </body>
</html>
