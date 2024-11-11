<?php
// Configuración de cabeceras para permitir acceso desde otros orígenes
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

// Verifica que el método de solicitud sea GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Responde con el mensaje simple
    echo "Hi, I'm Sarahi. This is my PHP project";
} else {
    // Si no es GET, responde con un error 405
    http_response_code(405);
    echo "Método no permitido";
}
?>