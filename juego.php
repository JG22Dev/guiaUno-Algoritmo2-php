<?php
session_start();
if(!isset($_SESSION['num'])){
    $_SESSION['num']=rand(1,10);
    $_SESSION['intentos'] = 3;
}

echo $_SESSION['num'];

echo "<br>".$_SESSION['intentos'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego adivinar</title>
</head>
<body>

    <h1>Adivina el número</h1>
    <p>Introduce un número entre 1 y 10:</p>

    <form method="post">
            <input type="number" name="num" min="1" max= "10" required placeholder="Ingrese número aquí">
            <input type="submit" value="Adivinar">
    </form>


<?php
    if(isset($_POST['num'])){
        $numero= $_POST['num'];
        //mostrar el numero que va ingresando en el input
        echo "<br>".$numero;
    //si las interacciones (intentos) son mayores a cero seguimos jugando
        if($_SESSION['intentos']>0){
            //si el numero que insertamos es estrictamente igual a la de session num
            if($numero == $_SESSION['num']){
                echo "<h3>¡Felicidades! Adivinaste el número.</h3>";
                //destruimos la session
                session_destroy();
               //sino 
            }else {
                //descontamos uno
                $_SESSION['intentos'] -= 1;
                // y si llega a cero
                if ($_SESSION['intentos'] == 0) {
                    //se pierde y se vuelve a cerrar la sesion
                    echo "<h3>Has Perdido. El número era ".$_SESSION['num']."</h3>";
                    session_destroy();
                    //sino se sigue jugando hasta que se pierda los intentos
                } else {
                    echo "<p>Incorrecto. Te quedan: ".$_SESSION['intentos']." intentos</p>";
                }
            }
        }
    }


    
    
?>

</body>
</html>
    
