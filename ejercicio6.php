<?php
session_start();
/*Escribir el programa que me permita ingresar 2 numeros y elegir
la operación a realizar (suma, resta,
multiplicacion, division) 
y me muestre el resultado de la misma.*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Seis</title>
</head>
<body>

    <h1>Mini calculadora</h1>
    <form method="POST">
        <label for="nota1">Numero </label>
        <input type="number" name="nota1" id="nota1" required >
        <label for="nota2">Numero </label>
        <input type="number" name="nota2" id="nota2" required >
        <label for="operacion">Operacion</label>
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
            <option value="division">Division</option>
        </select>
        <input type="submit" value="Calcular">
    </form>


<?php 
    if(isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['operacion'])){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $operacion = $_POST['operacion'];
        switch($operacion){
            case "suma":
                $resultado = $nota1 + $nota2; 
                echo "Resultado de la suma es: ". $resultado;
                break;
            case "resta":
                $resultado = $nota1 - $nota2; 
                echo "Resultado de la resta es: ". $resultado;
                break;
            case "multiplicacion":
                $resultado = $nota1 * $nota2; 
                echo "Resultado de la multiplicacion es: ". $resultado;
                break;
            case "division":
                if($nota2!=0){
                    $resultado = $nota1 / $nota2; 
                    echo "Resultado de la division es: ". $resultado;
                } else{
                    echo "No se puede dividir por cero";
                }
                break;
            default:
            echo "Operacion no valida";
            break;
        }
    }/*    REVISAR CODIGO
       $_SESSION['nota1']=$_POST['nota1'];}
    if(isset($_POST['nota2'])){
        $_SESSION['nota2']=$_POST['nota2'];}
    if(isset($_POST['operacion'])){
        $_SESSION['operacion']=$_POST['operacion'];
        
        switch($operacion){
            case "suma":
                $resultado= $_SESSION['nota1'] + $_SESSION['nota2'];
                break;
            case "resta":
                $resultado= $_SESSION['nota1'] - $_SESSION['nota2'];
                break;
            case "multiplicacion":
                $resultado= $_SESSION['nota1'] * $_SESSION['nota2'];
                break;
            case "division":
                if($_SESSION['nota2']!=0){
                    $resultado= $_SESSION['nota1'] / $_SESSION['nota2'];
                }else {
                    echo "No se puede dividir por cero.";
                }
                break;
            default: 
                echo"operacion no valida";
        }
    }
    echo "<br><br>El resultado es: $resultado"; */
    ?>

</body>
</html>