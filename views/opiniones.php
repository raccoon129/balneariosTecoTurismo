<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Opiniones de Clientes</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
  <!-- Font Awesome para las estrellas -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- SweetAlert2 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2 class="mb-4 text-center">Opiniones de Nuestros Clientes</h2>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <form action="../controllers/guardar_opinion.php" method="post" enctype="multipart/form-data">

          <!-- Nombre -->
          <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
          </div>

          <!-- Teléfono -->
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required>
          </div>

          <!-- Email -->
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <!-- Opinión -->
          <div class="mb-3">
            <label for="opinion" class="form-label">Tu opinión</label>
            <textarea class="form-control" name="opinion" id="opinion" rows="3" required></textarea>
          </div>

          <!-- Valoración -->
          <div class="mb-3">
            <label class="form-label">Valoración</label>
            <div class="star-rating">
              <i class="far fa-star" data-rating="1"></i>
              <i class="far fa-star" data-rating="2"></i>
              <i class="far fa-star" data-rating="3"></i>
              <i class="far fa-star" data-rating="4"></i>
              <i class="far fa-star" data-rating="5"></i>
            </div>
            <input type="hidden" name="valoracion" id="valoracion" required>
          </div>

          <!-- Botón de envío -->
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Enviar Opinión</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS y dependencias -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 JS -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
  <!-- Script para la funcionalidad de las estrellas -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const stars = document.querySelectorAll('.star-rating .fa-star');
      const ratingInput = document.getElementById('valoracion');

      stars.forEach(star => {
        star.addEventListener('click', function() {
          const rating = this.getAttribute('data-rating');
          ratingInput.value = rating;
          updateStars(rating);
        });
      });

      function updateStars(rating) {
        stars.forEach(star => {
          const starRating = star.getAttribute('data-rating');
          if (starRating <= rating) {
            star.classList.remove('far');
            star.classList.add('fas');
          } else {
            star.classList.remove('fas');
            star.classList.add('far');
          }
        });
      }

      // Mostrar el mensaje de éxito si se redirigió con el parámetro success=1
      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.has('success')) {
        Swal.fire({
          title: "¡Muchas Gracias!",
          text: "Tu opinión se ha guardado exitosamente.",
          icon: "success"
        });
      }
    });
  </script>
</body>
</html>
