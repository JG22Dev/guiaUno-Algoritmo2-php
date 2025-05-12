<?php
/*
12) Crear una aplicación que dados 3 numeros enteros ($a $b y $c) diga cual tiene el valor del medio, y en el caso
que no exitiera me lo informe por pantalla.
Ejemplos:
$a=10; $b=5; $c=1; muestra “el valor del medio es b=5”
$a=10; $b=5; $c=10; muestra “no existe valor del medio”
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title>Valor del Medio</title>
</head>
<body>
    <h2>Ingresar 3 Números</h2>
    <form method="post">
        <input type="number" name="a" required placeholder="Número A"><br>
        <input type="number" name="b" required placeholder="Número B"><br>
        <input type="number" name="c" required placeholder="Número C"><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if (($a > $b && $a < $c) || ($a > $c && $a < $b)) {
            echo "El valor del medio es A = $a";
        } elseif (($b > $a && $b < $c) || ($b > $c && $b < $a)) {
            echo "El valor del medio es B = $b";
        } elseif (($c > $a && $c < $b) || ($c > $b && $c < $a)) {
            echo "El valor del medio es C = $c";
        } else {
            echo "No existe valor del medio.";
        }
    }
    ?>
</body>
</html>
