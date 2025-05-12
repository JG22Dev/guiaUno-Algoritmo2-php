<?php
// Definimos la función para calcular la edad
function calcularEdad($fechaNacimiento) {
    $fechaNacimiento = new DateTime($fechaNacimiento); // Convertir la fecha de nacimiento a objeto DateTime
    $fechaActual = new DateTime(); // Obtenemos la fecha actual
    $edad = $fechaActual->diff($fechaNacimiento)->y; // Calculamos la diferencia en años
    return $edad;
}

// Inicializamos la variable para almacenar la edad calculada
$edad = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibimos los datos del formulario
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $anio = $_POST['anio'];
    
    // Creamos la fecha en formato YYYY-MM-DD
    $fechaNacimiento = "$anio-$mes-$dia";
    
    // Calculamos la edad llamando a la función
    $edad = calcularEdad($fechaNacimiento);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Edad</title>
</head>
<body>
    <h2>Ingrese su fecha de nacimiento</h2>

    <!-- Formulario para ingresar la fecha de nacimiento -->
    <form method="POST">
        <label for="dia">Día:</label>
        <input type="number" id="dia" name="dia" required min="1" max="31"><br><br>
        
        <label for="mes">Mes:</label>
        <input type="number" id="mes" name="mes" required min="1" max="12"><br><br>
        
        <label for="anio">Año:</label>
        <input type="number" id="anio" name="anio" required min="1900" max="2023"><br><br>

        <button type="submit">Calcular Edad</button>
    </form>

    <?php
    // Si se calculó la edad, mostramos el resultado
    if ($edad !== '') {
        echo "<p>La edad calculada es: $edad años.</p>";
    }
    ?>
</body>
</html>
