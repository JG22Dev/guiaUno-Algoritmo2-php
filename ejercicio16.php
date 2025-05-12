<?php
/* 16) Crear un programa que me permita ingresar día, mes y año. (3 inputs) Validar si la fecha ingresada es correcta,
sino que me pida reingresar (ej: 31/2/2022). Además que calcule cuantos días faltan o cuantos días pasaron
desde la fecha actual y me lo informe por pantalla, debajo del formulario de ingreso.
*/

// Inicialización de variables
$error = '';
$diasTranscurridos = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoger los valores del formulario
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];

    // Validación de la fecha
    if (checkdate($mes, $dia, $anio)) {
        // Si la fecha es válida, calculamos la diferencia con la fecha actual
        $fechaIngresada = strtotime("$anio-$mes-$dia");
        $fechaActual = time(); // Hora actual

        // Calculamos los días de diferencia
        $diferencia = $fechaActual - $fechaIngresada;
        $diasTranscurridos = floor($diferencia / (60 * 60 * 24)); // Convertimos los segundos en días

        if ($diasTranscurridos > 0) {
            $diasTranscurridos = "$diasTranscurridos días han pasado desde la fecha ingresada.";
        } elseif ($diasTranscurridos < 0) {
            $diasTranscurridos = abs($diasTranscurridos) . " días faltan para la fecha ingresada.";
        } else {
            $diasTranscurridos = "La fecha ingresada es hoy.";
        }
    } else {
        // Si la fecha no es válida, mostramos un mensaje de error
        $error = 'Fecha inválida, por favor reingresa una fecha correcta.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Días desde una Fecha</title>
</head>
<body>
    <h2>Ingrese una Fecha</h2>
    <form method="post">
        <label for="dia">Día:</label>
        <input type="number" id="dia" name="dia" required><br><br>

        <label for="mes">Mes:</label>
        <input type="number" id="mes" name="mes" required><br><br>

        <label for="anio">Año:</label>
        <input type="number" id="anio" name="anio" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    // Mostrar mensaje de error si la fecha no es válida
    if ($error) {
        echo "<p style='color: red;'>$error</p>";
    }

    // Mostrar el resultado de los días transcurridos
    if ($diasTranscurridos) {
        echo "<p>$diasTranscurridos</p>";
    }
    ?>

</body>
</html>
