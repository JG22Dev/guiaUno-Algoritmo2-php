


<?php
session_start();
/*Crear un programa que me permita ingresar 1 numero y 
me diga si es par o impar.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Uno</title>
</head>
<body>
    <main>
        <h1>Ingrese su Número</h1>
        <form  method="get">
            <label for="number" >Numero</label>
            <input type="number" name="number" required>
            <input type="submit" value="Enviar Número">
        </form>
    </main>
    


<?php 
    if(isset($_GET['number'])){
        $_SESSION['miNumber'] = $_GET['number'];
    }else{
        echo " ";
    }
    $number= $_SESSION['miNumber'];
    
        if($number%2==0){
            echo "<br>El numero ". $number ." es par ";
        } else{
            echo "<br>El numero ". $number ." es impar ";
    } 
    
?>

</body>
</html>