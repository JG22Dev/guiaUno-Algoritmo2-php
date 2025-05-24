<?php
/*9) Crear una funcion validarPalabra que permita que ingresen palabras de entre 5 y 10 caracteres.
La funcion dara 1 si la palabra es valida, y 0 si es inválida.
Crear un formulario para ingresar una palabra y utilizando la función me diga si la palabra es valida o no
 */

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validar Palabra</title>
</head>
<body>
    <h2>Validador de Palabras</h2>

    <form method="post">
        <label>Ingrese una palabra:</label><br>
        <input type="text" name="palabra"><br><br>
        <input type="submit" value="Validar">
    </form>

    <?php
function validarPalabra($palabra) {
    //SE BUSCO EN CHAT GPT LA FORMA QUE LOS ESPACIOS SEAN UN USO DE ESPACIO DE MEMORIA
    $palabra = trim($palabra); // Elimina espacios al inicio y al final 
    $longitud = strlen($palabra);

    if ($longitud >= 5 && $longitud <= 10) {
        return 1;
    } else {
        return 0;
    }
}

    if (isset($_POST["palabra"])) {
        $palabra = $_POST["palabra"];
        
        if ($palabra !== "") {
            $resultado = validarPalabra($palabra);

            if ($resultado == 1) {
                echo "<p>✅ La palabra <strong>$palabra</strong> es válida.</p>";
            } else {
                echo "<p>❌ La palabra <strong>$palabra</strong> es inválida (debe tener entre 5 y 10 caracteres).</p>";
            }
        } else {
            echo "<p>⚠️ Por favor, ingrese una palabra.</p>";
        }
    }
    ?>
</body>
</html>
