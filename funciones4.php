<?php
// Definimos la función para obtener el día de la semana
function obtenerDiaSemana($numero) {
    // Array de días de la semana
    $dias = [
        1 => "Lunes",
        2 => "Martes",
        3 => "Miércoles",
        4 => "Jueves",
        5 => "Viernes",
        6 => "Sábado",
        7 => "Domingo"
    ];

    // Verificamos si el número está entre 1 y 7
    if (isset($dias[$numero])) {
        return "El día es: " . $dias[$numero];
    } else {
        return "El día no existe.";
    }
}

// Inicializamos la variable del mensaje
$mensaje = '';

// Verificamos si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibimos el número ingresado por el usuario
    $numero = (int)$_POST['numero'];

    // Llamamos a la función y guardamos el mensaje
    $mensaje = obtenerDiaSemana($numero);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Día de la Semana</title>
</head>
<body>
    <h2>Ingrese un número del 1 al 7</h2>

    <!-- Formulario para ingresar el número del día -->
    <form method="POST">
        <label for="numero">Número del día:</label>
        <input type="number" id="numero" name="numero" required><br><br>

        <button type="submit">Obtener Día</button>
    </form>

    <?php
    // Si se calculó el día, lo mostramos
    if ($mensaje !== '') {
        echo "<h3>Resultado:</h3>";
        echo "<p>$mensaje</p>";
    }
    ?>
</body>
</html>
