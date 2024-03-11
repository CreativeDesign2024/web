<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera los datos del formulario
    $nombre = htmlspecialchars($_POST["nombre"]);
    $numero = htmlspecialchars($_POST["numero"]);
    $servicios = isset($_POST["servicios"]) ? $_POST["servicios"] : [];

    // Puedes hacer algo con los datos, como almacenarlos en una base de datos o enviarlos por correo electrónico
    // En este ejemplo, solo los mostraremos
    echo "<h2>Resumen de la Solicitud:</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Número de Contacto:</strong> $numero</p>";

    if (!empty($servicios)) {
        echo "<p><strong>Servicios Seleccionados:</strong> " . implode(", ", $servicios) . "</p>";
    } else {
        echo "<p>No se seleccionaron servicios.</p>";
    }
} else {
    // Si alguien intenta acceder directamente a este archivo PHP, redirigirlo al formulario
    header("Location: formulario.html");
    exit();
}
?>
