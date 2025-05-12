<?php
session_start();
/* Crear un programa que me permita ingresar 10 numeros a traves de un formulario. Al enviarlos me debe
mostrar:

a) Cuantos de los numeros son positivos y cuantos negativos
b) Cuantos son pares
c) Cuantos son mayores a 10 y menores a 90
d) Cual es la suma total de los numeros ingresados*/

?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Números</title>
</head>
<body>
    <h2>Ingresar 10 Números</h2>
    <form method="post">
        <?php 
        for ($i = 0; $i < 10; $i++) {
            echo '<input type="number" name="numeros[]" required><br>';
        }
        ?>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numeros = $_POST['numeros'];

        $positivos = 0;
        $negativos = 0;
        $pares = 0;
        $rango = 0;
        $sumaTotal = 0;

        foreach ($numeros as $num) {
            $num = (int)$num;
            $sumaTotal += $num;

            if ($num > 0) {
                $positivos++;
            }
            if ($num < 0) {
                $negativos++;
            }
            if ($num % 2 == 0) {
                $pares++;
            }
            if ($num > 10 && $num < 90) {
                $rango++;
            }
        }

        echo "<h3>Resultados:</h3>";
        echo "Positivos: $positivos<br>";
        echo "Negativos: $negativos<br>";
        echo "Pares: $pares<br>";
        echo "Entre 10 y 90: $rango<br>";
        echo "Suma Total: $sumaTotal<br>";
    }
    ?>
</body>
</html>
