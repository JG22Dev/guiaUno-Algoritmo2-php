<?php
/* Crear un programa que me permita ingresar una fecha (input date) y me diga que estación del año es.
Debe crearse una funcion calcularEstacion() que reciba como parametro la fecha y devuelva "primavera, verano,
otoño, invierno".*/

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Estación del Año</title>
</head>
<body>
    <h2>¿Qué estación es?</h2>

    <form method="post">
        <label>Ingrese una fecha:</label><br>
        <input type="date" name="fecha"><br><br>
        <input type="submit" value="Calcular estación">
    </form>

    <?php
    function calcularEstacion($fecha) {
        $dia = date("d", strtotime($fecha));
        $mes = date("m", strtotime($fecha));

        if (($mes == 12 && $dia >= 21) || ($mes == 1) || ($mes == 2) || ($mes == 3 && $dia <= 20)) {
            return "Verano";
        } elseif (($mes == 3 && $dia >= 21) || ($mes == 4) || ($mes == 5) || ($mes == 6 && $dia <= 20)) {
            return "Otoño";
        } elseif (($mes == 6 && $dia >= 21) || ($mes == 7) || ($mes == 8) || ($mes == 9 && $dia <= 20)) {
            return "Invierno";
        } elseif (($mes == 9 && $dia >= 21) || ($mes == 10) || ($mes == 11) || ($mes == 12 && $dia <= 20)) {
            return "Primavera";
        } else {
            return "Fecha inválida";
        }
    }

    if (isset($_POST["fecha"])) {
        $fecha = $_POST["fecha"];
        if ($fecha != "") {
            $estacion = calcularEstacion($fecha);
            echo "<p>La estación del año para la fecha <strong>$fecha</strong> es: <strong>$estacion</strong>.</p>";
        } else {
            echo "<p>Por favor, seleccione una fecha válida.</p>";
        }
    }
    ?>
</body>
</html>
