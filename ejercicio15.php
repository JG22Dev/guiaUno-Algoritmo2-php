<?php
/*15) Crear un temporizador. Debe tener dos botones:
a. Iniciar que imprimirá en pantalla la hora actual.
b. Finalizar(solo debe ser visible cuando se haya iniciado el temporizador)Que imprimirá en pantalla el tiempo transcurrido */

session_start(); // Inicia la sesión para guardar la hora de inicio

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    // Al presionar el botón "Iniciar"
    if (isset($_POST['iniciar'])) {
        // Guardamos la hora de inicio al presionar "Iniciar"
        $_SESSION['hora_inicio'] = time();
    }
    // Al presionar el botón "Finalizar"
    if (isset($_POST['finalizar'])) {
        // Verificamos si existe la hora de inicio
        if (isset($_SESSION['hora_inicio'])) {
            $hora_inicio = $_SESSION['hora_inicio'];
            $tiempo_transcurrido = time() - $hora_inicio; // Calculamos el tiempo en segundos
            $minutos = floor($tiempo_transcurrido / 60); // Minutos
            $segundos = $tiempo_transcurrido % 60; // Segundos
            $tiempo_formateado = sprintf("%02d:%02d", $minutos, $segundos); // Formato minutos:segundos
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temporizador</title>
</head>
<body>
    <h2>Temporizador</h2>

    <form method="post">
        <!-- Botón Iniciar -->
        <button type="submit" name="iniciar">Iniciar</button>

        <!-- Botón Finalizar (solo visible cuando el temporizador ha iniciado) -->
        <?php
        if (isset($_SESSION['hora_inicio'])) {
            echo '<button type="submit" name="finalizar">Finalizar</button>';
        }
        ?>
    </form>

    <?php
    // Mostrar la hora actual al presionar "Iniciar"
    if (isset($_POST['iniciar'])) {
        echo "<h3>Hora actual: " . date("H:i:s") . "</h3>";
    }

    // Mostrar el tiempo transcurrido al presionar "Finalizar"
    if (isset($tiempo_formateado)) {
        echo "<h3>Tiempo transcurrido: $tiempo_formateado</h3>";
    }
    ?>
</body>
</html>
