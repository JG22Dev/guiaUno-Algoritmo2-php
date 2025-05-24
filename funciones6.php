<?php
/*6) Crear una función calcularSueldo que reciba como parámetros el sueldo bruto, antigüedad y cantidad de hijos y
me devuelva el recibo de sueldo de la persona teniendo en cuenta que si su antigüedad es mayor a 5 años el
sueldo se incrementa 10%, si es mayor a 10 años se incrementa en 20%, por cada hijo cobrará 1000 pesos extra.
EL recibo de sueldo debe ser:
Sueldo bruto: $....
Antigüedad ... años: $....
... hijos: $...
Total a cobrar: $..... */

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Sueldo</title>
</head>
<body>
    <h2>Recibo de Sueldo</h2>

    <form method="post">
        <label>Sueldo bruto:</label>
        <input type="number" name="bruto"><br><br>

        <label>Años de antigüedad:</label>
        <input type="number" name="antiguedad"><br><br>

        <label>Cantidad de hijos:</label>
        <input type="number" name="hijos"><br><br>

        <input type="submit" value="Calcular sueldo">
    </form>

    <?php
    // Función para calcular el sueldo
    function calcularSueldo($bruto, $antiguedad, $hijos) {
        $extraAntiguedad = 0;

        if ($antiguedad > 10) {
            $extraAntiguedad = $bruto * 0.20;
        } elseif ($antiguedad > 5) {
            $extraAntiguedad = $bruto * 0.10;
        }

        $extraHijos = $hijos * 1000;
        $total = $bruto + $extraAntiguedad + $extraHijos;

        $recibo  = "Sueldo bruto: $$bruto<br>";
        $recibo .= "Antigüedad $antiguedad años: $$extraAntiguedad<br>";
        $recibo .= "$hijos hijo(s): $$extraHijos<br>";
        $recibo .= "<strong>Total a cobrar: $$total</strong><br>";

        return $recibo;
    }

    // Procesar formulario
    if (isset($_POST["bruto"]) && isset($_POST["antiguedad"]) && isset($_POST["hijos"])) {
        $bruto = $_POST["bruto"];
        $antiguedad = $_POST["antiguedad"];
        $hijos = $_POST["hijos"];

        echo "<br>";
        echo calcularSueldo($bruto, $antiguedad, $hijos);
    }
    ?>
</body>
</html>
