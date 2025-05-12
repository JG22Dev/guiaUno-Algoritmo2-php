<?php
// Definimos la función para calcular el estado del alumno
function calcularNota($nota1, $nota2, $nota3) {
    // Calculamos el promedio
    $promedio = ($nota1 + $nota2 + $nota3) / 3;
    
    // Determinamos el estado del alumno
    if ($promedio >= 7) {
        return "Aprobado con promedio de " . number_format($promedio, 2);
    } elseif ($promedio >= 4) {
        return "Aplazado con promedio de " . number_format($promedio, 2);
    } else {
        return "Desaprobado con promedio de " . number_format($promedio, 2);
    }
}

// Inicializamos la variable para el mensaje
$mensaje = '';

// Verificamos si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibimos las notas ingresadas por el usuario
    $nota1 = (float)$_POST['nota1'];
    $nota2 = (float)$_POST['nota2'];
    $nota3 = (float)$_POST['nota3'];

    // Llamamos a la función y guardamos el mensaje
    $mensaje = calcularNota($nota1, $nota2, $nota3);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Nota del Alumno</title>
</head>
<body>
    <h2>Ingrese las 3 notas del alumno</h2>

    <!-- Formulario para ingresar las notas -->
    <form method="POST">
        <label for="nota1">Nota 1:</label>
        <input type="number" id="nota1" name="nota1" step="0.01" required><br><br>
        
        <label for="nota2">Nota 2:</label>
        <input type="number" id="nota2" name="nota2" step="0.01" required><br><br>
        
        <label for="nota3">Nota 3:</label>
        <input type="number" id="nota3" name="nota3" step="0.01" required><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php
    // Si se calculó el estado, lo mostramos
    if ($mensaje !== '') {
        echo "<h3>Resultado:</h3>";
        echo "<p>$mensaje</p>";
    }
    ?>
</body>
</html>

<?php
//CON AYUDA DE CHAT GPT POR USAR number_format y step="0.01"