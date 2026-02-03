<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Configuración
$to_fundacion = 'contacto@fundacionyonari.org';
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
$name = isset($_POST['name']) ? clean_input($_POST['name']) : '';
$email = isset($_POST['email']) ? clean_input($_POST['email']) : '';
$phone = isset($_POST['phone']) ? clean_input($_POST['phone']) : '';
$subject = isset($_POST['subject']) ? clean_input($_POST['subject']) : '';
$message = isset($_POST['message']) ? clean_input($_POST['message']) : '';

// Validaciones
$errors = [];

if (empty($name) || strlen($name) < 3) {
    $errors[] = 'El nombre debe tener al menos 3 caracteres';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'El correo electrónico no es válido';
}

if (empty($subject) || strlen($subject) < 3) {
    $errors[] = 'El asunto debe tener al menos 3 caracteres';
}

if (empty($message) || strlen($message) < 10) {
    $errors[] = 'El mensaje debe tener al menos 10 caracteres';
}

if (!empty($errors)) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
    exit;
}

// ========== EMAIL 1: A LA FUNDACIÓN ==========
$subject_fundacion = "Nuevo mensaje de contacto - $subject";
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
        .footer { text-align: center; margin-top: 30px; padding: 20px; color: #6b7280; font-size: 12px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1 style='margin:0; font-size: 24px;'>📧 Nuevo Mensaje de Contacto</h1>
        </div>
        <div class='content'>
            <p style='font-size: 16px; margin-bottom: 20px;'>Has recibido un nuevo mensaje desde el formulario de contacto de fundacionyonari.org:</p>
            
            <div class='info-row'>
                <span class='label'>Nombre:</span> $name
            </div>
            
            <div class='info-row'>
                <span class='label'>Correo:</span> $email
            </div>
            
            <div class='info-row'>
                <span class='label'>Teléfono:</span> " . ($phone ? $phone : 'No proporcionado') . "
            </div>
            
            <div class='info-row'>
                <span class='label'>Asunto:</span> $subject
            </div>
            
            <div class='info-row'>
                <span class='label'>Mensaje:</span><br><br>
                " . nl2br($message) . "
            </div>
            
            <p style='margin-top: 30px; padding: 15px; background: #fef3c7; border-radius: 8px; border-left: 4px solid #f59e0b;'>
                <strong>⏰ Recuerda:</strong> Responde a este mensaje lo antes posible para brindar un excelente servicio.
            </p>
        </div>
        <div class='footer'>
            <p>Este mensaje fue enviado desde el formulario de contacto de<br>
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
$headers_fundacion .= "Reply-To: $email\r\n";

// ========== EMAIL 2: RESPUESTA AUTOMÁTICA AL USUARIO ==========
$subject_usuario = "Hemos recibido tu mensaje - Fundación Yonari";
$message_usuario = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; padding: 30px; text-align: center; border-radius: 10px 10px 0 0; }
        .content { background: #f9fafb; padding: 30px; border-radius: 0 0 10px 10px; }
        .highlight { background: #fef3c7; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #f59e0b; }
        .button { display: inline-block; padding: 15px 30px; background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); color: white; text-decoration: none; border-radius: 50px; margin: 20px 0; font-weight: bold; }
        .footer { text-align: center; margin-top: 30px; padding: 20px; color: #6b7280; font-size: 12px; }
        .social-icons { margin: 20px 0; }
        .social-icons a { display: inline-block; margin: 0 10px; color: #f59e0b; text-decoration: none; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1 style='margin:0; font-size: 28px;'>⚖️ Fundación Yonari</h1>
            <p style='margin: 10px 0 0 0; font-size: 14px; opacity: 0.9;'>Protege tus derechos</p>
        </div>
        <div class='content'>
            <h2 style='color: #f59e0b; margin-top: 0;'>¡Hola $name! 👋</h2>
            
            <p style='font-size: 16px;'>Gracias por ponerte en contacto con <strong>Fundación Yonari</strong>.</p>
            
            <div class='highlight'>
                <p style='margin: 0; font-size: 15px;'>
                    ✅ <strong>Hemos recibido tu mensaje correctamente</strong><br><br>
                    Nuestro equipo está revisando tu solicitud y se comunicará contigo lo antes posible para responder tus dudas y brindarte la asesoría que necesitas.
                </p>
            </div>
            
            <p><strong>Resumen de tu mensaje:</strong></p>
            <p style='background: white; padding: 15px; border-radius: 8px; border-left: 4px solid #f59e0b;'>
                <strong>Asunto:</strong> $subject<br>
                <strong>Mensaje:</strong> " . substr($message, 0, 150) . (strlen($message) > 150 ? '...' : '') . "
            </p>
            
            <p style='margin-top: 30px;'>Mientras tanto, puedes:</p>
            <ul style='line-height: 2;'>
                <li>📱 Escribirnos por WhatsApp: <a href='https://wa.me/573135968790' style='color: #f59e0b;'>313 596 8790</a></li>
                <li>🌐 Visitar nuestro sitio web: <a href='https://fundacionyonari.org' style='color: #f59e0b;'>fundacionyonari.org</a></li>
                <li>📧 Enviarnos un correo: contacto@fundacionyonari.org</li>
            </ul>
            
            <center>
                <a href='https://wa.me/573135968790' class='button'>Contactar por WhatsApp</a>
            </center>
            
            <div class='social-icons' style='text-align: center; margin-top: 30px;'>
                <p style='margin-bottom: 10px; color: #6b7280;'>Síguenos en nuestras redes sociales:</p>
                <a href='https://facebook.com/fundacionyonari' style='margin: 0 8px;'>Facebook</a>
                <a href='https://instagram.com/fundacionyonari' style='margin: 0 8px;'>Instagram</a>
                <a href='https://twitter.com/fundacionyonari' style='margin: 0 8px;'>Twitter</a>
            </div>
        </div>
        <div class='footer'>
            <p><strong>Fundación Yonari</strong><br>
            Quibdó - Chocó - Colombia<br>
            Horario: Lun-Vie 8:00 AM - 6:00 PM | Sáb 9:00 AM - 1:00 PM</p>
            <p style='margin-top: 15px; font-size: 11px; color: #9ca3af;'>
                Este es un correo automático, por favor no respondas directamente a este mensaje.<br>
                Para comunicarte con nosotros, usa los datos de contacto proporcionados arriba.
            </p>
        </div>
    </div>
</body>
</html>
";

$headers_usuario = "MIME-Version: 1.0\r\n";
$headers_usuario .= "Content-type: text/html; charset=UTF-8\r\n";
$headers_usuario .= "From: Fundacion Yonari <$from_email>\r\n";
$headers_usuario .= "Reply-To: $to_fundacion\r\n";

// Enviar emails
$mail_fundacion = mail($to_fundacion, $subject_fundacion, $message_fundacion, $headers_fundacion);
$mail_usuario = mail($email, $subject_usuario, $message_usuario, $headers_usuario);

if ($mail_fundacion && $mail_usuario) {
    echo json_encode([
        'success' => true,
        'message' => '¡Mensaje enviado correctamente! Revisa tu correo para más información.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Hubo un error al enviar el mensaje. Por favor, intenta de nuevo o contáctanos por WhatsApp.'
    ]);
}
?>
