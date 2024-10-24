<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Solicitar una Reserva</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4 text-center">Solicitar una Reserva</h2>
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
          <!-- Fecha y hora de llegada -->
          <div class="mb-3">
            <label for="arrival-date" class="form-label">Fecha y hora de llegada</label>
            <div class="input-group">
              <input type="date" class="form-control" id="arrival-date" aria-label="Fecha de llegada">
              <input type="time" class="form-control" id="arrival-time" aria-label="Hora de llegada">
            </div>
          </div>
          <!-- Número de personas (adultos y niños) -->
          <div class="input-group mb-3">
            <span class="input-group-text">Adultos</span>
            <input type="number" class="form-control" placeholder="Número de adultos" aria-label="Número de adultos" min="1">
            <span class="input-group-text">Niños</span>
            <input type="number" class="form-control" placeholder="Número de niños" aria-label="Número de niños" min="0">
          </div>

          <!-- Duración de la estancia -->
          <div class="mb-3">
            <label for="stay-duration" class="form-label">Duración de la estancia</label>
            <select class="form-select" id="stay-duration" aria-label="Selecciona duración">
              <option selected>Selecciona una opción</option>
              <option value="1">Día completo</option>
              <option value="2">Medio día</option>
              <option value="3">Fin de semana</option>
              <option value="4">Dos días</option>
              <option value="5">Tres días</option>
              <option value="6">Cuatro días</option>
            </select>
          </div>

          <!-- Comentarios adicionales -->
          <div class="input-group mb-3">
            <span class="input-group-text">Comentarios adicionales</span>
            <textarea class="form-control" aria-label="Comentarios adicionales"></textarea>
          </div>

          <!-- Botón de envío (actualizado) -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Solicitar Información</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
