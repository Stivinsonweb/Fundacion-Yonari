<?php
// =====================================================
// PRUEBA DE CONEXIÓN - FUNDACIÓN YONARI
// =====================================================
// Archivo: BD/test-connection.php
// =====================================================

require_once 'conexion.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Conexión - Fundación Yonari</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: rgba(31, 41, 55, 0.8);
            border: 2px solid #f59e0b;
            border-radius: 20px;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(245, 158, 11, 0.3);
        }
        h1 {
            color: #f59e0b;
            margin-bottom: 10px;
            font-size: 28px;
            text-align: center;
        }
        .subtitle {
            text-align: center;
            color: #9ca3af;
            margin-bottom: 30px;
            font-size: 14px;
        }
        .test-result {
            background: rgba(17, 24, 39, 0.5);
            border-radius: 12px;
            padding: 20px;
            margin: 20px 0;
        }
        .success {
            border-left: 4px solid #10b981;
        }
        .error {
            border-left: 4px solid #ef4444;
        }
        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid rgba(156, 163, 175, 0.2);
        }
        .info-row:last-child {
            border-bottom: none;
        }
        .label {
            color: #9ca3af;
            font-weight: 600;
        }
        .value {
            color: #f59e0b;
            font-weight: bold;
        }
        .icon {
            font-size: 48px;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn {
            display: block;
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 10px;
            font-weight: bold;
            margin-top: 20px;
            transition: transform 0.3s;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
            margin-top: 20px;
        }
        .stat-card {
            background: rgba(17, 24, 39, 0.5);
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            border: 1px solid rgba(245, 158, 11, 0.3);
        }
        .stat-value {
            font-size: 32px;
            font-weight: bold;
            color: #f59e0b;
            margin: 10px 0;
        }
        .stat-label {
            font-size: 12px;
            color: #9ca3af;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🗄️ Test de Conexión</h1>
        <p class="subtitle">Fundación Yonari - Sistema de Visitas</p>

        <?php
        $result = testConnection();
        
        if ($result['success']) {
            echo '<div class="test-result success">';
            echo '<div class="icon">✅</div>';
            echo '<h2 style="color: #10b981; text-align: center; margin-bottom: 20px;">¡Conexión Exitosa!</h2>';
            
            // Información de la conexión
            echo '<div class="info-row">';
            echo '<span class="label">Estado:</span>';
            echo '<span class="value">Conectado</span>';
            echo '</div>';
            
            echo '<div class="info-row">';
            echo '<span class="label">Base de Datos:</span>';
            echo '<span class="value">' . DB_NAME . '</span>';
            echo '</div>';
            
            echo '<div class="info-row">';
            echo '<span class="label">Host:</span>';
            echo '<span class="value">' . DB_HOST . '</span>';
            echo '</div>';
            
            echo '<div class="info-row">';
            echo '<span class="label">Usuario:</span>';
            echo '<span class="value">' . DB_USER . '</span>';
            echo '</div>';
            
            // Probar consulta a la tabla
            try {
                $pdo = getDBConnection();
                
                // Obtener estadísticas
                $stats_sql = "SELECT 
                    COUNT(*) as total_visitas,
                    COUNT(DISTINCT IP) as visitantes_unicos,
                    COUNT(DISTINCT DATE(Fecha_visita)) as dias_activos,
                    MAX(Fecha_visita) as ultima_visita
                    FROM contador_vistas";
                
                $stmt = $pdo->query($stats_sql);
                $stats = $stmt->fetch();
                
                echo '<div class="stats-grid">';
                
                echo '<div class="stat-card">';
                echo '<div class="stat-label">Total Visitas</div>';
                echo '<div class="stat-value">' . number_format($stats['total_visitas']) . '</div>';
                echo '</div>';
                
                echo '<div class="stat-card">';
                echo '<div class="stat-label">Visitantes Únicos</div>';
                echo '<div class="stat-value">' . number_format($stats['visitantes_unicos']) . '</div>';
                echo '</div>';
                
                echo '<div class="stat-card">';
                echo '<div class="stat-label">Días Activos</div>';
                echo '<div class="stat-value">' . number_format($stats['dias_activos']) . '</div>';
                echo '</div>';
                
                echo '<div class="stat-card">';
                echo '<div class="stat-label">Última Visita</div>';
                echo '<div class="stat-value" style="font-size: 14px;">' . 
                     ($stats['ultima_visita'] ? date('d/m/Y', strtotime($stats['ultima_visita'])) : 'N/A') . 
                     '</div>';
                echo '</div>';
                
                echo '</div>';
                
                closeDBConnection($pdo);
                
            } catch (PDOException $e) {
                echo '<div style="margin-top: 20px; padding: 15px; background: rgba(239, 68, 68, 0.1); border-radius: 10px;">';
                echo '<p style="color: #ef4444;">⚠️ Error al consultar la tabla: ' . $e->getMessage() . '</p>';
                echo '</div>';
            }
            
            echo '</div>';
            
        } else {
            echo '<div class="test-result error">';
            echo '<div class="icon">❌</div>';
            echo '<h2 style="color: #ef4444; text-align: center; margin-bottom: 20px;">Error de Conexión</h2>';
            echo '<p style="text-align: center; color: #9ca3af;">' . $result['message'] . '</p>';
            echo '<div style="margin-top: 20px; padding: 15px; background: rgba(239, 68, 68, 0.1); border-radius: 10px;">';
            echo '<p style="color: #9ca3af; font-size: 14px;"><strong>Verifica:</strong></p>';
            echo '<ul style="color: #9ca3af; font-size: 14px; margin-left: 20px; margin-top: 10px;">';
            echo '<li>Que la base de datos exista</li>';
            echo '<li>Que el usuario y contraseña sean correctos</li>';
            echo '<li>Que el usuario tenga permisos en la base de datos</li>';
            echo '<li>Que la tabla contador_vistas exista</li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
        }
        ?>

        <a href="../Index.php" class="btn">← Volver al Sitio Web</a>
        
        <p style="text-align: center; margin-top: 20px; color: #6b7280; font-size: 12px;">
            Desarrollado por Stivinson Correa & William Renteria
        </p>
    </div>
</body>
</html>
