<?php
/*En una clase hay 20 alumnos y se necesita dividirlos en 4 grupos (A, B, C y D) de 5 personas. 
Se pide crear un programa que divida los grupos aleatoriamente
y me muestre quienes son los integrantes de cada grupoCrear
un array $alumnos que contenga los nombres de los 20 alumnos: 
Andrea, Beatriz, Cristian, Diego, Enrique, Fabián, Gustavo, Hernán,
Irma, Juan, Kiara, Leonardo, Mario, Nicolás, Oscar, Patricia, Quentin,
Rodrigo, Sergio y Tamara.
(cargar directamente el array dentro del código)
Cada vez que se refresque la página deben rearmarse los
grupos de manera aleatoria.
(No usar JS)
Parte B (opcional)
Llegaron 4 alumnos nuevos( Ulises, Victoria, Walter y Xavier)
y deseo repartirlos en 6 grupos de 4 personas (A, B, C, D, E y F).*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO ARRAYS</title>
</head>
<body>
    <h1>Mostrar Grupos</h1>
    <?php
    //array alumnos ya declarado
    $alumnos= array('Andrea', 'Beatriz', 'Cristian', 'Diego', 'Enrique', 'Fabián', 'Gustavo', 
    'Hernán', 'Irma', 'Juan', 'Kiara', 'Leonardo', 'Mario', 'Nicolás', 'Oscar', 'Patricia',
    'Quentin', 'Rodrigo', 'Sergio' ,'Tamara');
    echo "<h4>Mostrar Array de Alumnos</h4>";
    foreach($alumnos as $recorrido){
        echo "  ".$recorrido." - ";
    }



    echo"<br><br>";
    //mOSTRAR ARRAY
    var_dump($alumnos);
    echo"<br><br>";
    foreach($alumnos as $recorrido){
        echo"<br>$recorrido";
    }
    echo"<br><br>";

    //ELIJE UNO AL AZAR DEL ARRAY
    $grupo= rand(0,count($alumnos));
    $grupoAleatorio= rand(1,4);
    echo "$alumnos[$grupoAleatorio][$grupo]";


    //DESORDENA TODO EL ARRAY
    //https://www.youtube.com/watch?v=UHuohuEk9tY
    shuffle($alumnos);
    echo"<br><br>";
    //VOLVER A MOSTRAR ARRAY DESORDENADOS
    var_dump($alumnos);
    echo"<br><br>";

    foreach($alumnos as $recorrido){
        echo"<br>$recorrido";
    }
    echo"<br><br>";

    echo "<br>El grupo A esta conformado de las Siguientes personas: ";
    echo "<br>El grupo B esta conformado de las Siguientes personas: ";
    echo "<br>El grupo C esta conformado de las Siguientes personas: ";
    echo "<br>El grupo D esta conformado de las Siguientes personas: ";
?>

</body>
</html>


//FALTA TERMINAR



    
