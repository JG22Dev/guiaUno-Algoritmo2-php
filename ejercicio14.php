<?php
/* 14) Crear un programa que al presionar un botón me muestre la fecha y hora actual en español.
Ejemplo: Hoy es Lunes 8 de Abril de 2024, son las 12:35*/

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fecha y Hora Actual</title>
</head>
<body>
    <h2>Mostrar Fecha y Hora Actual</h2>
    <form method="post">
        <button type="submit">Mostrar Fecha y Hora</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Establecer la zona horaria a Argentina
        date_default_timezone_set('America/Argentina/Buenos_Aires');

        // Configurar el idioma a español
        setlocale(LC_TIME, "es_ES.UTF-8");

        // Obtener la fecha y hora actual
        $fechaHoraActual = strftime("%A, %d de %B de %Y, son las %H:%M");

        // Mostrar la fecha y hora
        echo "<h3>Hoy es: $fechaHoraActual</h3>";
    }
    ?>
</body>
</html>
