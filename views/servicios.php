<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <!-- Sección de Servicios -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <img src="/api/placeholder/400/300" class="img-fluid rounded" alt="Imagen del evento">
            </div>
            <div class="col-md-8">
                <h2>Servicios disponibles</h2>
                <p class="text-muted mb-2">
                    Precio adicional: <span class="fw-bold">....</span>
                </p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

        <h3 class="mb-4">Elige el servicio ideal para ti</h3>
        <!-- Filtros -->
        <div class="d-flex gap-2 mb-4 flex-wrap">
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Precio adicional
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" data-filter="precio" data-value="0-50">0 - 50€</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="precio" data-value="51-100">51 - 100€</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="precio" data-value="101-200">101 - 200€</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="precio" data-value="200+">Ninguno</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Ubicación
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" data-filter="ubicacion" data-value="madrid">Madrid</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="ubicacion" data-value="barcelona">Barcelona</a>
                    </li>
                    <li><a class="dropdown-item" href="#" data-filter="ubicacion" data-value="valencia">Valencia</a>
                    </li>
                    <li><a class="dropdown-item" href="#" data-filter="ubicacion" data-value="sevilla">Sevilla</a></li>
                </ul>
            </div>
            <button class="btn btn-outline-primary" data-filter="nuevos">Nuevos</button>
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Categorías
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" data-filter="categoria" data-value="spa-bienestar">Spa y
                            Bienestar</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="categoria"
                            data-value="aventura-entretenimiento">Aventura y entretenimiento</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="categoria" data-value="piscinas-nado">Piscinas y
                            áreas de Nado</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="categoria"
                            data-value="gastronomia-bebidas">Gastronomía y bebidas</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="categoria"
                            data-value="hospedaje-alojamiento">Hospedaje y Alojamiento</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="categoria"
                            data-value="eventos-celebraciones">Eventos y Celebraciones</a></li>
                    <li><a class="dropdown-item" href="#" data-filter="categoria"
                            data-value="alquiler-instalaciones">Alquiler de Instalaciones</a></li>
                </ul>
            </div>
        </div>

        <!-- Filtros seleccionados -->
        <div id="filtros-seleccionados" class="mb-4"></div>

        <div class="row g-4">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <div class="col-md-3">
                    <div class="card h-100">
                        <img src="/api/placeholder/400/300" class="card-img-top" alt="Imagen del servicio">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Nombre del servicio   <?= $i + 1 ?></h5>
                            <p class="card-text text-muted flex-grow-1">
                                Descripción breve del evento. Lorem ipsum dolor sit amet, consectetur adipiscing elit...
                            </p>
                            <a href="#" class="btn btn-link p-0 text-end">Más...</a>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

        <div class="text-center mt-4">
            <button id="mostrarMas" class="btn btn-primary">Mostrar más</button>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
