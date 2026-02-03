<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Incluir archivo de conexión
require_once 'conexion.php';


function getVisitorIP() {
    $ip_keys = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED',
        'HTTP_X_CLUSTER_CLIENT_IP',
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR'
    ];
    
    foreach ($ip_keys as $key) {
        if (array_key_exists($key, $_SERVER)) {
            foreach (explode(',', $_SERVER[$key]) as $ip) {
                $ip = trim($ip);
                if (filter_var($ip, FILTER_VALIDATE_IP, 
                    FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {
                    return $ip;
                }
            }
        }
    }
    return $_SERVER['REMOTE_ADDR'] ?? 'unknown';
}

function getUserAgent() {
    return $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
}

$pdo = getDBConnection();

if (!$pdo) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Error de conexión a la base de datos',
        'visits' => 0
    ]);
    exit;
}


$visitor_ip = getVisitorIP();
$navegador = getUserAgent();
$fecha_actual = date('Y-m-d H:i:s');


$check_sql = "SELECT COUNT(*) as count FROM contador_vistas 
              WHERE IP = :ip 
              AND DATE(Fecha_visita) = CURDATE()";

try {
    $stmt = $pdo->prepare($check_sql);
    $stmt->execute(['ip' => $visitor_ip]);
    $result = $stmt->fetch();
    
    $is_new_visit = ($result['count'] == 0);
    
    if ($is_new_visit) {
        $insert_sql = "INSERT INTO contador_vistas (Navegador, IP, Fecha_visita) 
                       VALUES (:navegador, :ip, :fecha)";
        
        $stmt = $pdo->prepare($insert_sql);
        $stmt->execute([
            'navegador' => $navegador,
            'ip' => $visitor_ip,
            'fecha' => $fecha_actual
        ]);
    }
    
    
    $count_sql = "SELECT COUNT(*) as total FROM contador_vistas";
    $stmt = $pdo->query($count_sql);
    $total = $stmt->fetch();
    
    
    $stats_sql = "SELECT 
        COUNT(*) as total_visitas,
        COUNT(DISTINCT IP) as visitantes_unicos,
        COUNT(DISTINCT DATE(Fecha_visita)) as dias_activos,
        MAX(Fecha_visita) as ultima_visita
        FROM contador_vistas";
    
    $stmt = $pdo->query($stats_sql);
    $stats = $stmt->fetch();
    
    
    $today_sql = "SELECT COUNT(*) as visitas_hoy 
                  FROM contador_vistas 
                  WHERE DATE(Fecha_visita) = CURDATE()";
    
    $stmt = $pdo->query($today_sql);
    $today = $stmt->fetch();
    
    
    echo json_encode([
        'success' => true,
        'visits' => (int)$total['total'],
        'is_new_visit' => $is_new_visit,
        'visitor_ip' => $visitor_ip,
        'stats' => [
            'total_visitas' => (int)$stats['total_visitas'],
            'visitantes_unicos' => (int)$stats['visitantes_unicos'],
            'dias_activos' => (int)$stats['dias_activos'],
            'visitas_hoy' => (int)$today['visitas_hoy'],
            'ultima_visita' => $stats['ultima_visita']
        ]
    ]);
    
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Error al procesar la solicitud',
        'visits' => 0
    ]);
    error_log("Error en get-visits.php: " . $e->getMessage());
}

// Cerrar conexión
closeDBConnection($pdo);
?>
