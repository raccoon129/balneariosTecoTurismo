<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balnearios</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!-- Seccion inicio de Balnearios -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="/api/placeholder/400/300" class="img-fluid rounded" alt="Imagen del balneario">
            </div>
            <div class="col-md-8">
                <h2>Nombre Balneario</h2>
                <p class="mb-2">Descripción Balneario: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class="mb-2">Dirección: <span class="fw-bold">...</span></p>
                <p class="mb-2">Precio general: <span class="fw-bold">...</span></p>
                <p class="mb-2">Horario: <span class="fw-bold">... - ...</span></p>
                <h5 class="mt-3">Contacto:</h5>
                <ul class="list-unstyled">
                    <li>Telefono: <a href="#" class="text-decoration-none">...</a></li>
                    <li>Correo: <a href="#" class="text-decoration-none">...</a></li>
                </ul>
                <h5 class="mt-3">Redes Sociales:</h5>
                <ul class="list-unstyled">
                    <li>Facebook: <a href="#" class="text-decoration-none">...</a></li>
                    <li>Instagram: <a href="#" class="text-decoration-none">...</a></li>
                    <li>X (Twitter): <a href="#" class="text-decoration-none">...</a></li>
                    <li>TikTok: <a href="#" class="text-decoration-none">...</a></li>
                </ul>
            </div>
        </div>
        <!-- Seccion de servicios con los que cuenta -->
        <section class="container mt-5">
            <h2 class="text-right">Servicios con los que cuenta</h2>
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
                                    <img src="/api/placeholder/400/300" class="card-img-top"
                                        alt="<?php echo $servicio['nombre']; ?>">
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
                <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>
        <!-- Seccion de ubicacion, eventos y promociones -->
        <div class="container mt-5">
            <h2 class="text-right">Como llegar a nuestro Balneario</h2>
            <div class="filtros-container">
            </div>
            <!-- Mapa y Tarjetas de Balnearios a la izquierda -->
            <div class="row">
                <div class="col-md-6">
                    <div id="map" style="height: 400px; background-color: #eee;">
                        <div>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d119736.61103048701!2d-99.78512778742679!3d20.309822584399946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1728582229945!5m2!1ses-419!2smx"
                                width="635" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <div class="card-body d-flex">
                            <div class="flex-grow-1">
                                <h5 class="card-title">EVENTO 1</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Fecha y Lugar</h6>
                                <p class="card-text">Descripción del evento 1. Detalles sobre la actividad, horarios y más información relevante.</p>
                            </div>
                            <div class="ml-3">
                                <img src="../img/evento1.jpg" alt="Evento 1" class="d-block"
                                    style="width:100px; height:auto;">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body d-flex">
                            <div class="flex-grow-1">
                                <h5 class="card-title">EVENTO 2</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Fecha y Lugar</h6>
                                <p class="card-text">Descripción del evento 2. Información sobre la actividad, participantes y detalles importantes.</p>
                            </div>
                            <div class="ml-3">
                                <img src="../img/evento2.jpg" alt="Evento 2" class="d-block"
                                    style="width:100px; height:auto;">
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body d-flex">
                            <div class="flex-grow-1">
                                <h5 class="card-title">PROMOCIÓN ESPECIAL</h5>
                                <h6 class="card-subtitle mb-2 text-muted">Válido hasta: [Fecha]</h6>
                                <p class="card-text">Detalles de la promoción especial. Descuentos, paquetes o ofertas exclusivas para nuestros visitantes.</p>
                            </div>
                            <div class="ml-3">
                                <img src="../img/promocion.jpg" alt="Promoción" class="d-block"
                                    style="width:100px; height:auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
