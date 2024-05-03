<?php
session_start();
/*Crear un programa que muestre los numeros del 150 al 0.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Tres</title>
</head>
<body>

<h1>Mostrar los 150 Números decreciente</h1>
    <form method="POST">
        <label for="number" >Numeros</label>
        <input type="submit" value="Mostrar Números">
    </form>


<?php 
    for($i=150; $i>0;$i--){
        echo " ".$i." ";
    }    
    
?>

?>

</body>
</html>