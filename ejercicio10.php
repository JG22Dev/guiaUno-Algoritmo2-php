<?php
session_start();
/* Ingresar 5 numeros a traves de un formulario y que me diga cual
es el mayor y cual el menor.*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Diez</title>
</head>
<body>

<h2>Ingrese 5 números</h2>
    <form method="post">
        
    <?php
    for($i=0; $i<5;$i++){
        $array= array();
    }
    ?>
    <input type="number" name="number" id="number">
        <input type="submit" value="Calcular">
    </form>


<?php 
if(isset($_POST['array'])){
    $array = $_POST['array'];
    
    foreach($array as $a){
        echo "<br>".$a;
    }
}

    /* if(isset($_POST['num1'])){
        $num1 = $_POST['num1'];
        
        if($num1<0){
            echo "Debe ingresar un nùmero mayor a cero";
        } else{
            $cuadrado= $num1 * $num1;
            echo "<br><br>Resultado del cuadrado de  $num1 es: $cuadrado";
        }
        
    } */
?>
</body>
</html>