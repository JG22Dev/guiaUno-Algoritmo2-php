<?php
/* SALUDAR: Crear una función que reciba el nombre y apellido de una persona y devuelva el mensaje “Hola ... ....
¿Cómo estás?*/

// Definimos la función para saludar
function saludar($nombre, $apellido) {
    return "Hola $nombre $apellido, ¿Cómo estás?";
}

// Inicializamos la variable del mensaje
$mensaje = '';

// Verificamos si el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibimos los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']); // Usamos htmlspecialchars para evitar inyecciones de código
    $apellido = htmlspecialchars($_POST['apellido']);

    // Llamamos a la función y guardamos el mensaje
    $mensaje = saludar($nombre, $apellido);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo Personalizado</title>
</head>
<body>
    <h2>Ingrese su Nombre y Apellido</h2>

    <!-- Formulario para ingresar nombre y apellido -->
    <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <button type="submit">Saludar</button>
    </form>

    <?php
    // Si el mensaje no está vacío, lo mostramos
    if ($mensaje !== '') {
        echo "<p>$mensaje</p>";
    }
    ?>
</body>
</html>
