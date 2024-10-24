
<?php
/*
$servername = "localhost"; // Nombre del server
$username = "root";        // Nombre de usuario de MySQL
$password = "";            // Contraseña de MySQL
$dbname = "balneario"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificacion de la  conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa";


*/
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Parámetros de conexión
define('DB_HOST', 'localhost');     // o tu host
define('DB_USER', 'root');         // tu usuario de MySQL
define('DB_PASS', '');             // tu contraseña de MySQL
define('DB_NAME', 'balneario'); // nombre de tu base de datos

// Crear conexión y manejar errores
try {
    $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    // Verificar conexión
    if ($db->connect_error) {
        throw new Exception("Error de conexión: " . $db->connect_error);
    }
    
    // Establecer charset
    $db->set_charset("utf8");
    
} catch (Exception $e) {
    die("Error en la conexión a la base de datos: " . $e->getMessage());
}




?>


