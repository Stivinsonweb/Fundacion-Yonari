<?php

// Configuración de la base de datos
define('DB_HOST', 'localhost:3306');
define('DB_NAME', 'funyona_vista');
define('DB_USER', 'funyona_Bd');
define('DB_PASS', 'Fundacion_yonari2025@');

// Función para obtener la conexión PDO
function getDBConnection() {
    try {
        $pdo = new PDO(
            "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
            DB_USER,
            DB_PASS,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
            ]
        );
        return $pdo;
    } catch (PDOException $e) {
        // Log del error (en producción, enviar a un archivo de log)
        error_log("Error de conexión a BD: " . $e->getMessage());
        return null;
    }
}

// Función para cerrar la conexión
function closeDBConnection(&$pdo) {
    $pdo = null;
}

// Función para probar la conexión
function testConnection() {
    $pdo = getDBConnection();
    if ($pdo) {
        return [
            'success' => true,
            'message' => 'Conexión exitosa a la base de datos',
            'database' => DB_NAME
        ];
    } else {
        return [
            'success' => false,
            'message' => 'Error al conectar con la base de datos'
        ];
    }
}
?>
