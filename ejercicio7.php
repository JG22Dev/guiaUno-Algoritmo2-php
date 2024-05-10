<?php
session_start();
/*Crear un programa que me permita ingresar 2 numeros, 
los reste y que me muestre el resultado y me diga si el
numero obtenido es positivo o negativo.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Siete</title>
</head>
<body>

    <h1>¿Positivo o Negativo?</h1>
    <form method="POST">
        <label for="nota1">Numero </label>
        <input type="number" name="nota1" id="nota1" required >
        <label for="nota2">Numero </label>
        <input type="number" name="nota2" id="nota2" required >
        <input type="submit" value="Calcular">
    </form>


<?php 
    if(isset($_POST['nota1']) && isset($_POST['nota2'])){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];

        $resta= $nota1 - $nota2;

                if($resta<0){
                    echo "Resultado de la resta es: ". $resta. " y el numero es Negativo";
                } else{
                    echo "Resultado de la resta es: ". $resta. " y el numero es Positivo";
                }
        }
?>


</body>
</html>