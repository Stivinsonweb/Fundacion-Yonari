<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Configuración
$to_fundacion = 'notificacionjudicial@fundacionyonari.org';
$from_email = 'noreply@fundacionyonari.org';

// Función para sanitizar datos
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validar que sea POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

// Obtener datos del formulario
$donor_name = isset($_POST['donor_name']) ? clean_input($_POST['donor_name']) : '';
$donor_email = isset($_POST['donor_email']) ? clean_input($_POST['donor_email']) : '';
$amount = isset($_POST['amount']) ? clean_input($_POST['amount']) : '';
$frequency = isset($_POST['frequency']) ? clean_input($_POST['frequency']) : '';
$method = isset($_POST['method']) ? clean_input($_POST['method']) : '';
$notes = isset($_POST['notes']) ? clean_input($_POST['notes']) : '';

// Validaciones
$errors = [];

if (empty($donor_name) || strlen($donor_name) < 3) {
    $errors[] = 'El nombre debe tener al menos 3 caracteres';
}

if (empty($donor_email) || !filter_var($donor_email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'El correo electrónico no es válido';
}

if (empty($amount) || $amount < 1000) {
    $errors[] = 'El monto mínimo es $1,000 COP';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
    exit;
}

// Formatear datos
$amount_formatted = '$' . number_format($amount, 0, ',', '.') . ' COP';
$frequency_text = [
    'one_time' => 'Única',
    'monthly' => 'Mensual',
    'quarterly' => 'Trimestral'
];
$frequency_display = isset($frequency_text[$frequency]) ? $frequency_text[$frequency] : $frequency;

$method_text = [
    'bancolombia' => 'Bancolombia',
    'nequi' => 'Nequi'
];
$method_display = isset($method_text[$method]) ? $method_text[$method] : $method;

// ========== EMAIL 1: A LA FUNDACIÓN ==========
$subject_fundacion = "Nueva donación registrada - $amount_formatted";
$message_fundacion = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; padding: 30px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { background: #f9fafb; padding: 30px; border-radius: 0 0 10px 10px; }
        .info-row { margin: 15px 0; padding: 10px; background: white; border-left: 4px solid #f59e0b; }
        .label { font-weight: bold; color: #f59e0b; }
        .amount-box { background: #fef3c7; border: 2px solid #f59e0b; padding: 20px; text-align: center; border-radius: 10px; margin: 20px 0; }
        .footer { text-align: center; margin-top: 30px; padding: 20px; color: #6b7280; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1 style='margin:0; font-size: 24px;'>💝 Nueva Donación Registrada</h1>
        </div>
        <div class='content'>
            <p style='font-size: 16px; margin-bottom: 20px;'>¡Excelentes noticias! Se ha registrado una nueva donación desde el sitio web:</p>
            
            <div class='amount-box'>
                <h2 style='margin: 0; color: #f59e0b; font-size: 32px;'>$amount_formatted</h2>
                <p style='margin: 5px 0 0 0; color: #78716c;'>Donación $frequency_display</p>
            </div>
            
            <div class='info-row'>
                <span class='label'>Nombre del donante:</span> $donor_name
            </div>
            
            <div class='info-row'>
                <span class='label'>Correo:</span> $donor_email
            </div>
            
            <div class='info-row'>
                <span class='label'>Método de pago:</span> $method_display
            </div>
            
            <div class='info-row'>
                <span class='label'>Frecuencia:</span> $frequency_display
            </div>
            
            " . ($notes ? "
            <div class='info-row'>
                <span class='label'>Mensaje del donante:</span><br><br>
                " . nl2br($notes) . "
            </div>
            " : "") . "
            
            <p style='margin-top: 30px; padding: 15px; background: #fef3c7; border-radius: 8px; border-left: 4px solid #f59e0b;'>
                <strong>📋 Acción requerida:</strong> El donante debe realizar la transferencia según el método seleccionado. Verifica la recepción del pago y contacta al donante para confirmar.
            </p>
            
            " . ($method === 'bancolombia' ? "
            <div style='background: white; padding: 15px; border-radius: 8px; margin-top: 15px;'>
                <strong>Datos bancarios proporcionados:</strong><br>
                Banco: Bancolombia<br>
                Tipo de cuenta: Ahorros<br>
                Número de cuenta: 0000000000<br>
                Titular: Fundación Yonari<br>
                NIT: 000000000-0
            </div>
            " : "") . "
            
            " . ($method === 'nequi' ? "
            <div style='background: white; padding: 15px; border-radius: 8px; margin-top: 15px;'>
                <strong>Datos de Nequi proporcionados:</strong><br>
                Número: 313 596 8790
            </div>
            " : "") . "
        </div>
        <div class='footer'>
            <p>Este mensaje fue enviado desde el formulario de donaciones de<br>
            <strong>Fundación Yonari</strong><br>
            www.fundacionyonari.org</p>
        </div>
    </div>
</body>
</html>
";

$headers_fundacion = "MIME-Version: 1.0\r\n";
$headers_fundacion .= "Content-type: text/html; charset=UTF-8\r\n";
$headers_fundacion .= "From: Fundacion Yonari Web <$from_email>\r\n";
$headers_fundacion .= "Reply-To: $donor_email\r\n";

// ========== EMAIL 2: AGRADECIMIENTO AL DONANTE ==========
$subject_donante = "¡Gracias por tu donación! - Fundación Yonari";
$message_donante = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; padding: 40px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { background: #f9fafb; padding: 30px; border-radius: 0 0 10px 10px; }
        .heart-icon { font-size: 60px; margin: 20px 0; }
        .highlight { background: #fef3c7; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #f59e0b; }
        .info-box { background: white; padding: 20px; border-radius: 8px; margin: 20px 0; border: 2px solid #f59e0b; }
        .button { display: inline-block; padding: 15px 30px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; text-decoration: none; border-radius: 50px; margin: 20px 0; font-weight: bold; }
        .footer { text-align: center; margin-top: 30px; padding: 20px; color: #6b7280; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <div class='heart-icon'>💝</div>
            <h1 style='margin:0; font-size: 32px;'>¡Gracias por tu generosidad!</h1>
            <p style='margin: 10px 0 0 0; font-size: 16px; opacity: 0.9;'>Tu apoyo hace la diferencia</p>
        </div>
        <div class='content'>
            <h2 style='color: #f59e0b; margin-top: 0;'>Querido/a $donor_name, 🙏</h2>
            
            <p style='font-size: 16px;'>En nombre de <strong>Fundación Yonari</strong> y todas las personas a las que ayudamos, queremos expresarte nuestro más sincero agradecimiento por tu donación de <strong>$amount_formatted</strong>.</p>
            
            <div class='highlight'>
                <p style='margin: 0; font-size: 15px; text-align: center;'>
                    <strong>✨ Tu generosidad transforma vidas ✨</strong><br><br>
                    Gracias a personas como tú, podemos continuar defendiendo los derechos de quienes más lo necesitan y construyendo una sociedad más justa y equitativa.
                </p>
            </div>
            
            <h3 style='color: #f59e0b;'>📋 Detalles de tu donación:</h3>
            <div class='info-box'>
                <p style='margin: 5px 0;'><strong>Monto:</strong> $amount_formatted</p>
                <p style='margin: 5px 0;'><strong>Frecuencia:</strong> $frequency_display</p>
                <p style='margin: 5px 0;'><strong>Método:</strong> $method_display</p>
            </div>
            
            " . ($method === 'bancolombia' ? "
            <h3 style='color: #f59e0b;'>🏦 Instrucciones para completar tu donación:</h3>
            <div class='info-box'>
                <p><strong>Realiza la transferencia con los siguientes datos:</strong></p>
                <p style='margin: 8px 0;'>📍 <strong>Banco:</strong> Bancolombia</p>
                <p style='margin: 8px 0;'>💳 <strong>Tipo de cuenta:</strong> Ahorros</p>
                <p style='margin: 8px 0;'>🔢 <strong>Número de cuenta:</strong> 0000000000</p>
                <p style='margin: 8px 0;'>👤 <strong>Titular:</strong> Fundación Yonari</p>
                <p style='margin: 8px 0;'>📄 <strong>NIT:</strong> 000000000-0</p>
                <p style='margin-top: 15px; padding: 10px; background: #fef3c7; border-radius: 5px;'>
                    <strong>⚠️ Importante:</strong> Una vez realices la transferencia, por favor envíanos el comprobante de pago a <a href='mailto:notificacionjudicial@fundacionyonari.org' style='color: #f59e0b;'>notificacionjudicial@fundacionyonari.org</a> o por WhatsApp al 313 596 8790.
                </p>
            </div>
            " : "") . "
            
            " . ($method === 'nequi' ? "
            <h3 style='color: #f59e0b;'>📱 Instrucciones para completar tu donación:</h3>
            <div class='info-box'>
                <p><strong>Realiza la transferencia por Nequi:</strong></p>
                <p style='margin: 15px 0; font-size: 24px; text-align: center; color: #f59e0b;'><strong>313 596 8790</strong></p>
                <p style='margin-top: 15px; padding: 10px; background: #fef3c7; border-radius: 5px;'>
                    <strong>⚠️ Importante:</strong> Una vez realices la transferencia, por favor envíanos el comprobante de pago a <a href='mailto:notificacionjudicial@fundacionyonari.org' style='color: #f59e0b;'>notificacionjudicial@fundacionyonari.org</a> o por WhatsApp al 313 596 8790.
                </p>
            </div>
            " : "") . "
            
            <h3 style='color: #f59e0b;'>🌟 ¿Cómo ayuda tu donación?</h3>
            <p>Con tu aporte podemos:</p>
            <ul style='line-height: 1.8;'>
                <li>✅ Brindar asesoría jurídica gratuita a personas en situación de vulnerabilidad</li>
                <li>✅ Realizar talleres educativos en comunidades</li>
                <li>✅ Defender los derechos humanos en Colombia</li>
                <li>✅ Apoyar a familias que necesitan orientación legal</li>
            </ul>
            
            <div style='text-align: center; margin: 30px 0;'>
                <a href='https://wa.me/573135968790' class='button'>Enviar comprobante por WhatsApp</a>
            </div>
            
            <p style='margin-top: 30px; font-size: 15px; text-align: center; color: #6b7280;'>
                <em>\"Juntos construimos un futuro más justo para todos\"</em>
            </p>
        </div>
        <div class='footer'>
            <p><strong>Fundación Yonari</strong><br>
            Quibdó - Chocó - Colombia<br>
            📧 contacto@fundacionyonari.org | 📱 313 596 8790<br>
            Horario: Lun-Vie 8:00 AM - 6:00 PM | Sáb 9:00 AM - 1:00 PM</p>
            <p style='margin-top: 15px;'>
                Síguenos en: 
                <a href='https://facebook.com/fundacionyonari' style='color: #f59e0b; margin: 0 5px;'>Facebook</a> |
                <a href='https://instagram.com/fundacionyonari' style='color: #f59e0b; margin: 0 5px;'>Instagram</a> |
                <a href='https://twitter.com/fundacionyonari' style='color: #f59e0b; margin: 0 5px;'>Twitter</a>
            </p>
        </div>
    </div>
</body>
</html>
";

$headers_donante = "MIME-Version: 1.0\r\n";
$headers_donante .= "Content-type: text/html; charset=UTF-8\r\n";
$headers_donante .= "From: Fundacion Yonari <$from_email>\r\n";
$headers_donante .= "Reply-To: $to_fundacion\r\n";

// Enviar emails
$mail_fundacion = mail($to_fundacion, $subject_fundacion, $message_fundacion, $headers_fundacion);
$mail_donante = mail($donor_email, $subject_donante, $message_donante, $headers_donante);

if ($mail_fundacion && $mail_donante) {
    echo json_encode([
        'success' => true,
        'message' => '¡Gracias por tu donación! Revisa tu correo para las instrucciones de pago.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Hubo un error al procesar tu donación. Por favor, contáctanos por WhatsApp.'
    ]);
}
?>
