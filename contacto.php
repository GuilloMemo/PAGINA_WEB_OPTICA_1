<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = htmlspecialchars($_POST['nombre'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $mensaje = htmlspecialchars($_POST['mensaje'] ?? '');

    if ($nombre && $email && $mensaje) {
        // Cambia este correo por el tuyo
        $to = 'tucorreo@ejemplo.com';
        $subject = 'Nuevo mensaje desde el formulario de contacto Vision+';
        $body = "Nombre: $nombre\nEmail: $email\nMensaje: $mensaje";
        $headers = "From: $email\r\nReply-To: $email";
        
        if (mail($to, $subject, $body, $headers)) {
            echo '¡Mensaje enviado correctamente!';
        } else {
            echo 'No se pudo enviar el mensaje.';
        }
    } else {
        echo 'Por favor completa todos los campos.';
    }
    exit;
}
echo 'Acceso no autorizado.';

