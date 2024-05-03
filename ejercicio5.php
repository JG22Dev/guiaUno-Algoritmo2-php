<?php
session_start();
/*Crear un programa que me permita ingresar
5 numeros y me muestre su promedio.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Cinco</title>
</head>
<body>

    <h1>Cargar Notas</h1>
    <form method="POST">
        <label for="nota1">Nota 1 </label>
        <input type="number" name="nota1" id="nota1" required min="0" max="10">
        <label for="nota2">Nota 2 </label>
        <input type="number" name="nota2" id="nota2" required min="0" max="10">
        <label for="nota3">Nota 3 </label>
        <input type="number" name="nota3" id="nota3" required min="0" max="10">
        <label for="nota4">Nota 4 </label>
        <input type="number" name="nota4" id="nota4" required min="0" max="10">
        <label for="nota5">Nota 5 </label>
        <input type="number" name="nota5" id="nota5" required min="0" max="10">
        <input type="submit" value="Cargar Inputs">
    </form>


<?php 
    if(isset($_POST['nota1'])){
        $_SESSION['nota1']=$_POST['nota1'];}
    if(isset($_POST['nota2'])){
        $_SESSION['nota2']=$_POST['nota2'];}
    if(isset($_POST['nota3'])){
        $_SESSION['nota3']=$_POST['nota3'];}
    if(isset($_POST['nota4'])){
        $_SESSION['nota4']=$_POST['nota4'];}
    if(isset($_POST['nota5'])){
        $_SESSION['nota5']=$_POST['nota5'];}
    
    $promedio = ($_SESSION['nota1'] + $_SESSION['nota2'] +$_SESSION['nota3'] +$_SESSION['nota4'] +$_SESSION['nota5'])/5;
    echo "El promedio es: $promedio";
    ?>

</body>
</html>