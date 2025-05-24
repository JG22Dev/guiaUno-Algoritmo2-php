<?php
/*Crear un programa que pueda calcular suma, resta, multiplicación y división entre 2 números. El programa debe
tener un formulario para poder ingresar los números y la operación. Crear una función calculadora que reciba
como parámetro los 3 valores y devuelva el resultado.
Ejemplo: calculadora(2,+,2)*/
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora Básica</title>
</head>
<body>
    <h2>Calculadora</h2>

    <form method="post">
        <label>Primer número:</label>
        <input type="text" name="num1"><br><br>

        <label>Operación:</label>
        <select name="operacion">
            <option value="+">Suma (+)</option>
            <option value="-">Resta (-)</option>
            <option value="*">Multiplicación (*)</option>
            <option value="/">División (/)</option>
        </select><br><br>

        <label>Segundo número:</label>
        <input type="text" name="num2"><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    // Función calculadora básica
    function calculadora($a, $operador, $b) {
        if ($operador == "+") {
            return $a + $b;
        } elseif ($operador == "-") {
            return $a - $b;
        } elseif ($operador == "*") {
            return $a * $b;
        } elseif ($operador == "/") {
            if ($b == 0) {
                return "Error: no se puede dividir por cero.";
            } else {
                return $a / $b;
            }
        } else {
            return "Operación no válida.";
        }
    }

    // Si se envió el formulario
    if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operacion"])) {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        $resultado = calculadora($num1, $operacion, $num2);

        echo "<h3>Resultado: $resultado</h3>";
    }
    ?>
</body>
</html>
