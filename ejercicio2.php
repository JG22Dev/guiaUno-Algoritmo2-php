<?php
session_start();
/*Escribir un programa que muestre los numeros del 1 al 150.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Dos</title>
</head>
<body>

    <h1>Mostrar los 150 Números</h1>
    <form method="POST">
        <label for="number" >Numeros</label>
        <input type="submit" value="Mostrar Números">
    </form>


<?php 
    
    for($i=0; $i<=150;$i++){
        echo " ".$i." ";
    }
    
?>

</body>
</html>