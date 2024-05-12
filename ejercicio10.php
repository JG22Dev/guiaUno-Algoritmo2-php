<?php
session_start();
/* Ingresar 5 numeros a traves de un formulario y que me diga cual
es el mayor y cual el menor.*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Diez</title>
</head>
<body>
    <h2>Ingrese 5 números</h2>
    <form method="POST">
        <label for="nota1">Nota 1 </label>
        <input type="number" name="nota1" id="nota1" required >
        <label for="nota2">Nota 2 </label>
        <input type="number" name="nota2" id="nota2" required >
        <label for="nota3">Nota 3 </label>
        <input type="number" name="nota3" id="nota3" required >
        <label for="nota4">Nota 4 </label>
        <input type="number" name="nota4" id="nota4" required >
        <label for="nota5">Nota 5 </label>
        <input type="number" name="nota5" id="nota5" required>
        <input type="submit" value="Cargar Inputs">
    </form>
    <?php 
    //inicializo con valor 0
    $mayor = 0;
    $menor = 0;
    //verifico que los datos esten definidos
    if((isset($_POST['nota1']) &&  isset($_POST['nota2']) && isset($_POST['nota3']) && isset($_POST['nota4']) && isset($_POST['nota5']))){
        //los deposito dentro de un array
        $numeros= array(
            $_POST['nota1'],
            $_POST['nota2'],
            $_POST['nota3'],
            $_POST['nota4'],
            $_POST['nota5']
        );
        //Encontrar mayor y menor numero declaro mayor y menos como primer indice del array donde depositwe los numeros.
        $mayor = $numeros[0];
        $menor = $numeros[0];
        //con un foreach recorro el array para concoer los valores
        foreach($numeros as $num){
            // con una condicional defino "si $num es > $mayor  entonces tenemos nuevo mayor"
            if($num > $mayor){
                $mayor = $num;
            }
            // con otra condicional defino "si $num es < $menor entonces tenemos nuevo menor"
            if($num < $menor){
                $menor = $num;
            }
        }
    }
        //mostrar resultado
        echo "<h2>Resultado</h2><br>";
        echo "El resultado mayor es: ".$mayor. "<br>";
        echo "El resultado menor es: ".$menor. "<br>";
    ?>

</body>
</html>