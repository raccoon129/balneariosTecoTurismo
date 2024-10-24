<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <!-- Font Awesome para las estrellas -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4 text-center">Formulario de Contacto</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form>
          <!-- Nombre -->
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" required>
          </div>

          <!-- Teléfono -->
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" required>
          </div>
        </form>
        <!-- Nueva sección de suscripción y botones -->
        <div class="mt-4">
          <p class="text-right">¡No te pierdas nuestras mejores ofertas y eventos!</p>
          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="suscripcion">
            <label class="form-check-label" for="suscripcion">
              Suscribirme al boletín
            </label>
          </div>
          <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-success me-2">Realizar una reserva</button>
            <button type="button" class="btn btn-info">Dar una opinión</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS y dependencias -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
 
</body>
</html>
