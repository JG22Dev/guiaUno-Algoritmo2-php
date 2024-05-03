<?php
session_start();
/* Escribir el programa para que calcule el cuadrado de un numero,
y en caso de ingresar un numero negativo me
muestre “Debe ingresar un nùmero mayor a cero”*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Ocho</title>
</head>
<body>

    <h1>Cuadrado de un Numero</h1>
    <form method="POST">
        <label for="num1">Numero </label>
        <input type="number" name="num1" id="num1" required >
        <input type="submit" value="Calcular">
    </form>


<?php 
    if(isset($_POST['num1'])){
        $num1 = $_POST['num1'];
        
        if($num1<0){
            echo "Debe ingresar un nùmero mayor a cero";
        } else{
            $cuadrado= $num1 * $num1;
            echo "<br><br>Resultado del cuadrado de  $num1 es: $cuadrado";
        }
        
    }
?>
</body>
</html>