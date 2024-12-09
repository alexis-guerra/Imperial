<?php include(realpath('./Cabecera.php'));?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Extraescolares</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

  <style>
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

    /* Estilo de las actividades */
    .events_item {
      margin-bottom: 30px;
    }

    .events_item .thumb img {
      width: 100%;
      height: auto;
    }

    .events_item .down-content {
      padding: 10px;
      background-color: #fff;
      text-align: center;
    }

    .category {
      background-color: #007bff;
      color: #fff;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 14px;
    }

    .down-content h4 {
      font-size: 18px;
      margin-top: 10px;
    }

    /* Aplica cambios a los títulos y categorías dentro de #schedule */
    #schedule h1, #schedule h2, #schedule h3, #schedule h4, #schedule h5, #schedule h6, #schedule p, #schedule .category {
      transition: font-size 0.3s ease, line-height 0.3s ease;
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

  <!-- Contenido principal -->
  <section class="section" id="schedule">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h2>Actividades Extraescolares</h2>
            <h6>Conoce las Actividades extraescolares disponibles</h6>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li><a class="is_active" href="#!" data-filter="*">Mostrar Todas</a></li>
        <li><a href="#!" data-filter=".design">Deportivas</a></li>
        <li><a href="#!" data-filter=".development">Artísticas</a></li>
      </ul>
      <div class="row event_box">
        <!-- Actividades -->
        <div class="col-lg-4 col-md-6 event_outer design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-01.jpg" alt="Taekwondo"></a>
              <span class="category">Deportivas</span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Taekwondo</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 event_outer development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-02.jpg" alt="Canto"></a>
              <span class="category">Artísticas</span>
            </div>
            <div class="down-content">
              <span class="author">Cindy Walker</span>
              <h4>Canto</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 event_outer design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-03.jpg" alt="Atletismo"></a>
              <span class="category">Deportivas</span>
            </div>
            <div class="down-content">
              <span class="author">David Hutson</span>
              <h4>Atletismo</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 event_outer development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-04.jpg" alt="Club de lectura"></a>
              <span class="category">Artísticas</span>
            </div>
            <div class="down-content">
              <span class="author">Stella Blair</span>
              <h4>Club de Lectura</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 event_outer development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-05.jpg" alt="Filosofía"></a>
              <span class="category">Artísticas</span>
            </div>
            <div class="down-content">
              <span class="author">Sophia Rose</span>
              <h4>Filosofía</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 event_outer design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-06.jpg" alt="Fútbol"></a>
              <span class="category">Deportivas</span>
            </div>
            <div class="down-content">
              <span class="author">Mark Sanders</span>
              <h4>Fútbol</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    // Abrir/cerrar el menú lateral
    document.getElementById('menuToggle').addEventListener('click', function() {
      document.getElementById('sideMenu').classList.toggle('active');
    });

    // Función para cambiar a escala de grises
    document.getElementById('toggleGrayscale').addEventListener('click', function() {
      document.body.classList.toggle('grayscale');
    });

    // Función para cambiar el contraste
    document.getElementById('toggleContrast').addEventListener('click', function() {
      document.body.classList.toggle('high-contrast');
    });

    // Función para seguir el mouse
    let mouseFollowEnabled = false;
    const mouseFollowElement = document.createElement('div');
    mouseFollowElement.textContent = '🔴';
    mouseFollowElement.classList.add('mouse-follow');
    document.body.appendChild(mouseFollowElement);

    document.getElementById('toggleMouseFollow').addEventListener('click', function() {
      mouseFollowEnabled = !mouseFollowEnabled;
      mouseFollowElement.style.display = mouseFollowEnabled ? 'block' : 'none';
    });

    document.addEventListener('mousemove', function(e) {
      if (mouseFollowEnabled) {
        mouseFollowElement.style.left = e.pageX + 'px';
        mouseFollowElement.style.top = e.pageY + 'px';
      }
    });

    // Ajuste de tamaño de texto global solo en contenido
    document.getElementById('increaseFontSize').addEventListener('click', function() {
      document.querySelectorAll('#schedule, #schedule h1, #schedule h2, #schedule h3, #schedule h4, #schedule h5, #schedule h6, #schedule p, #schedule .category').forEach(element => {
        let currentFontSize = window.getComputedStyle(element).fontSize;
        let newFontSize = (parseFloat(currentFontSize) * 1.1) + 'px';
        element.style.fontSize = newFontSize;
      });
    });

    document.getElementById('decreaseFontSize').addEventListener('click', function() {
      document.querySelectorAll('#schedule, #schedule h1, #schedule h2, #schedule h3, #schedule h4, #schedule h5, #schedule h6, #schedule p, #schedule .category').forEach(element => {
        let currentFontSize = window.getComputedStyle(element).fontSize;
        let newFontSize = (parseFloat(currentFontSize) / 1.1) + 'px';
        element.style.fontSize = newFontSize;
      });
    });

    // Ajuste de espaciado solo en contenido
    document.getElementById('increaseSpacing').addEventListener('click', function() {
      document.querySelectorAll('#schedule').forEach(element => {
        element.style.lineHeight = '1.8'; // Aumentar espaciado solo en el contenido
      });
    });

    document.getElementById('decreaseSpacing').addEventListener('click', function() {
      document.querySelectorAll('#schedule').forEach(element => {
        element.style.lineHeight = '1.2'; // Disminuir espaciado solo en el contenido
      });
    });
  </script>

</body>

</html>

<?php include(realpath("./pie.php"));?> 
