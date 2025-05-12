<?php

/*13) Ingresar 5 numeros en un formulario (utilizar un bucle para cargar los inputs). Pasar los valores del array a 5
variables individuales, $a, $b, $c, $d, $e (utillizando list). Luego mostrarlas
Ejemplo: Numeros ingresados 1,2,3,4,5
Debe mostrar:
La variable a vale= 1, la variable b vale 2, la variable c vale 3, la variable d vale 4 y la variable e vale 5

*/
?><!DOCTYPE html>
<html>
<head>
    <title>Ingreso de 5 Números</title>
</head>
<body>
    <h2>Ingresar 5 Números</h2>
    <form method="post">
        <?php 
        for ($i = 0; $i < 5; $i++) {
            echo '<input type="number" name="numeros[]" required><br>';
        }
        ?>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los números del formulario
        $numeros = $_POST['numeros'];

        // Usar list para asignar los valores a las variables
        list($a, $b, $c, $d, $e) = $numeros;

        // Mostrar los valores
        echo "La variable A vale = $a<br>";
        echo "La variable B vale = $b<br>";
        echo "La variable C vale = $c<br>";
        echo "La variable D vale = $d<br>";
        echo "La variable E vale = $e<br>";
    }
    ?>
</body>
</html>
