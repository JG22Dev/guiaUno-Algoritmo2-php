<?php
session_start();
/*Escribir un programa que solo me permita ingresar un
numero positivo y me muestre todos los numeros que le
anteceden desde el 1.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Cuatro</title>
</head>
<body>

    <h1>Mostrar los numero anteriores a:</h1>
    <form method="POST">
        <label for="number">Numeros</label>
        <input type="number" name="number" id="number" required min="0">
        <input type="submit" value="Mostrar Números">
    </form>


<?php 
    if(isset($_POST['number'])){
        $_SESSION['miNumber']=$_POST['number'];
    }
    $max = $_SESSION['miNumber'];
    for($i=1; $i<=$max;$i++){
        echo " ".$i." ";
    }
    
?>

</body>
</html>