<!DOCTYPE html>
<html lang="en">

<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <!-- Carousel Inicio -->
  <div class="container">

    <div id="demo" class="carousel slide" data-bs-ride="carousel">

      <!-- Indicators/dots -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../img/Diapositiva1.jpg" alt="Balnearios1" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3>Bienvenido al Balneario 1</h3>
            <p>Disfruta de nuestras instalaciones</p>
            <a href="#!" class="btn btn-primary">Reserva ahora</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/Diapositiva2.jpg" alt="Balnearios2" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3>Bienvenido al Balneario 2</h3>
            <p>Disfruta de nuestras instalaciones</p>
            <a href="#!" class="btn btn-primary">Reserva ahora</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../img/Diapositiva3.jpg" alt="Balnearios3" class="d-block" style="width:100%">
          <div class="carousel-caption">
            <h3>Bienvenido al Balneario 3</h3>
            <p>Disfruta de nuestras instalaciones</p>
            <a href="#!" class="btn btn-primary">Reserva ahora</a>
          </div>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
  <br>
  <!-- Secccion de servicios -->
  <section class="container mt-5">
    <h2 class="text-right">Nuestros Servicios</h2>
    <p class="text-right">Descubra nuestro oasis de bienestar con servicios diseñados para su relajación y salud.</p>
    <section class="container mt-5">
      <!-- Carrusel de servicios -->
      <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicadores -->
        <div class="carousel-indicators">
          <?php
          $servicios = [
            ['nombre' => 'SPA TERMAL', 'descripcion' => 'Relájese en nuestras piscinas de aguas minerales.'],
            ['nombre' => 'MASAJES', 'descripcion' => 'Alivie tensiones con técnicas especializadas.'],
            ['nombre' => 'TRATAMIENTOS', 'descripcion' => 'Revitalice su cuerpo con terapias personalizadas.'],
            // Agrega más servicios aquí
          ];
          $totalSlides = ceil(count($servicios) / 3);
          for ($i = 0; $i < $totalSlides; $i++) {
            echo '<button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="' . $i . '"' . ($i === 0 ? ' class="active"' : '') . '></button>';
          }
          ?>
        </div>

        <!-- Contenido del carrusel -->
        <div class="carousel-inner">
          <?php
          for ($i = 0; $i < $totalSlides; $i++) {
            echo '<div class="carousel-item' . ($i === 0 ? ' active' : '') . '"><div class="row">';
            for ($j = $i * 3; $j < min(($i + 1) * 3, count($servicios)); $j++) {
              $servicio = $servicios[$j];
              ?>
              <div class="col-md-4 text-center">
                <div class="card">
                  <img src="/api/placeholder/400/300" class="card-img-top" alt="<?php echo $servicio['nombre']; ?>">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $servicio['nombre']; ?></h5>
                    <p class="card-text"><?php echo $servicio['descripcion']; ?></p>
                    <a href="#" class="btn btn-secondary">Más Información</a>
                  </div>
                </div>
              </div>
              <?php
            }
            echo '</div></div>';
          }
          ?>
        </div>
        <!-- Controles del carrusel -->
        <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </section>
    <!-- Carrusel de servicios -->
    <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel" data-ride="false">

      <!-- Indicadores -->
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#servicesCarousel" data-bs-slide-to="1"></button>
      </div>


  </section>
  <br>
  <!-- Seccion de Balnearios -->
  <div class="container mt-5">
    <h2 class="text-right">Nuestros Balnearios</h2>
    <div class="filtros-container">
      <!-- Filtros -->
      <div class="d-flex gap-2 mb-4 flex-wrap">
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Precio
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" data-filter="precio" data-value="0-50">0 - 50€</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="precio" data-value="51-100">51 - 100€</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="precio" data-value="101-200">101 - 200€</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="precio" data-value="200+">Más de 200€</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Ubicación
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" data-filter="ubicacion" data-value="madrid">Madrid</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="ubicacion" data-value="barcelona">Barcelona</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="ubicacion" data-value="valencia">Valencia</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="ubicacion" data-value="sevilla">Sevilla</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Valoración
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" data-filter="valoracion" data-value="5">5 estrellas</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="valoracion" data-value="4">4 estrellas o más</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="valoracion" data-value="3">3 estrellas o más</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Servicios
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" data-filter="servicios" data-value="spa">Spa</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="servicios" data-value="masajes">Masajes</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="servicios" data-value="sauna">Sauna</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="servicios" data-value="piscina">Piscina termal</a></li>
                </ul>
            </div>
        </div>

        <!-- Filtros seleccionados -->
        <div id="filtros-seleccionados" class="mb-4"></div>
      
      <!-- Contenedor principal para mapa y lista -->
      <div class="row">
        <!-- Contenedor del mapa -->
        <div class="col-md-6">
          <div class="map-container">
            <div id="map" style="height: 400px; background-color: #eee;">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d119736.61103048701!2d-99.78512778742679!3d20.309822584399946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1728582229945!5m2!1ses-419!2smx"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
        
        <!-- Contenedor de la lista desplazable -->
        <div class="col-md-6">
          <div class="balnearios-container">
            <div class="balnearios-list" style="height: 400px; overflow-y: auto;">
              <?php
              $balnearios = [
                ['nombre' => 'BALNEARIO 1', 'ubicacion' => 'Ubicación 1', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'imagen' => '../img/Diapositiva2.jpg'],
                ['nombre' => 'BALNEARIO 2', 'ubicacion' => 'Ubicación 2', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'imagen' => '../img/Diapositiva2.jpg'],
                ['nombre' => 'BALNEARIO 3', 'ubicacion' => 'Ubicación 3', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'imagen' => '../img/Diapositiva2.jpg'],
                // Puedes agregar más balnearios aquí
              ];

              foreach ($balnearios as $balneario) {
                echo '<div class="card mb-3">
                        <div class="card-body d-flex">
                          <div class="flex-grow-1">
                            <h5 class="card-title">' . $balneario['nombre'] . '</h5>
                            <h6 class="card-subtitle mb-2 text-muted">' . $balneario['ubicacion'] . '</h6>
                            <p class="card-text">' . $balneario['descripcion'] . '</p>
                          </div>
                          <div class="ml-3">
                            <img src="' . $balneario['imagen'] . '" alt="' . $balneario['nombre'] . '" class="d-block" style="width:100px; height:auto;">
                          </div>
                        </div>
                      </div>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- Seccion de Eventos y promociones -->
  <div class="container mt-5">
    <h2 class="text-right">Eventos y promociones disponibles</h2>
    <div class="filtros-container">
      <div class="row">
        <div class="col-md-6">
          <div class="eventos-container">
            <div class="eventos-list" style="height: 400px; overflow-y: auto;">
              <?php
              $eventos = [
                ['nombre' => 'Evento 1', 'fecha' => 'Fecha 1', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'imagen' => '../img/Diapositiva2.jpg'],
                ['nombre' => 'Evento 2', 'fecha' => 'Fecha 2', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'imagen' => '../img/Diapositiva2.jpg'],
                ['nombre' => 'Evento 3', 'fecha' => 'Fecha 3', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.', 'imagen' => '../img/Diapositiva2.jpg'],
                // Puedes agregar más eventos aquí
              ];

              foreach ($eventos as $evento) {
                echo '<div class="card mb-3">
                        <div class="card-body d-flex">
                          <div class="flex-grow-1">
                            <h5 class="card-title">' . $evento['nombre'] . '</h5>
                            <h6 class="card-subtitle mb-2 text-muted">' . $evento['fecha'] . '</h6>
                            <p class="card-text">' . $evento['descripcion'] . '</p>
                            <a href="#!" class="btn btn-primary">Más información</a>
                          </div>
                          <div class="ml-3">
                            <img src="' . $evento['imagen'] . '" alt="' . $evento['nombre'] . '" class="d-block" style="width:100px; height:auto;">
                          </div>
                        </div>
                      </div>';
              }
              ?>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="map" style="height: 400px; background-color: #eee;">
            <!-- Aqui se mostrara el calendario-->
            <div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>



