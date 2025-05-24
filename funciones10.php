<?php 
/*10) Crear un programa que al ingresar un número entero y apretar el botón 'Mostrar Tabla' me muestre la tabla de
multiplicar del número ingresado. Utilizar una funcion "mostrarTabla()”.
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h2>Mostrar tabla de multiplicar</h2>

    <form method="post">
        <label>Ingrese un número entero:</label><br>
        <input type="number" name="numero"><br><br>
        <input type="submit" value="Mostrar tabla">
    </form>

    <?php
    // Función que muestra la tabla de multiplicar
    function mostrarTabla($numero) {
        echo "<h3>Tabla del $numero:</h3>";
        echo "<br>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<br>$numero x $i = $resultado</br>";
        }
    }

    // Verificar si se envió el número
    if (isset($_POST["numero"])) {
        $numero = $_POST["numero"];

        // Solo mostramos si se ingresó algo
        if ($numero !== "") {
            mostrarTabla($numero);
        } else {
            echo "<p>⚠️ Por favor, ingrese un número válido.</p>";
        }
    }
    ?>
</body>
</html>
