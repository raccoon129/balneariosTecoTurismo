<?php
// Activar reporte de errores
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir la conexión
require_once '../config/db.php';

// Verificar que la conexión existe
if (!isset($db)) {
    die("Error: No se pudo establecer la conexión con la base de datos");
}

// Comprobar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Debug: Ver qué datos están llegando
    error_log("Datos POST recibidos: " . print_r($_POST, true));

    // Obtener los valores enviados desde el formulario
    $nombre_usuario = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $email_usuario = isset($_POST['email']) ? trim($_POST['email']) : '';
    $telefono_usuario = isset($_POST['telefono']) ? trim($_POST['telefono']) : '';
    $opinion = isset($_POST['opinion']) ? trim($_POST['opinion']) : '';
    $valoracion = isset($_POST['valoracion']) ? intval($_POST['valoracion']) : 0;

    // Debug: Ver los valores procesados
    error_log("Nombre: " . $nombre_usuario);
    error_log("Email: " . $email_usuario);
    error_log("Teléfono: " . $telefono_usuario);
    error_log("Opinión: " . $opinion);
    error_log("Valoración: " . $valoracion);

    // Validar los datos
    if (empty($nombre_usuario) || empty($email_usuario) || empty($telefono_usuario) || empty($opinion)) {
        die("Por favor, completa todos los campos.");
    }

    if ($valoracion < 1 || $valoracion > 5) {
        die("Por favor, selecciona una valoración válida (1-5).");
    }

    try {
        // Verificar que la conexión sigue activa
        if (!$db->ping()) {
            throw new Exception("La conexión a la base de datos se ha perdido");
        }

        // Inserción en la base de datos
        $stmt = $db->prepare("INSERT INTO opiniones_usuarios (nombre_usuario, email_usuario, telefono_usuario, opinion, valoracion, fecha_registro_opinion) VALUES (?, ?, ?, ?, ?, NOW())");
        if (!$stmt) {
            throw new Exception("Error en la preparación de la consulta: " . $db->error);
        }

        $stmt->bind_param("ssssi", $nombre_usuario, $email_usuario, $telefono_usuario, $opinion, $valoracion);        
        if (!$stmt->execute()) {
            throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
        }

        $stmt->close();
        
        // Redireccionar con mensaje de éxito
        header("Location: ../views/opiniones.php?success=1");
        exit;

    } catch (Exception $e) {
        error_log("Error en la base de datos: " . $e->getMessage());
        die("Ha ocurrido un error al guardar la opinión: " . $e->getMessage());
    }
}

// Cerrar la conexión al finalizar
if (isset($db)) {
    $db->close();
}
?>
