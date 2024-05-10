<!DOCTYPE html>
<html>
<head>
    <title>División Aleatoria de Alumnos en Grupos</title>
</head>
<body>
    <h1>Grupos de Alumnos</h1>
    <?php

    //RESPUESTA PROPORCIONADA POR CHATGPT
    // Definir el array de alumnos
    $alumnos = array(
        "Andrea", "Beatriz", "Cristian", "Diego", "Enrique",
        "Fabián", "Gustavo", "Hernán", "Irma", "Juan",
        "Kiara", "Leonardo", "Mario", "Nicolás", "Oscar",
        "Patricia", "Quentin", "Rodrigo", "Sergio", "Tamara"
    );

    // Mezclar el array de alumnos de forma aleatoria
    shuffle($alumnos);

    // Dividir a los alumnos en 4 grupos de 5 personas cada uno
    $grupos = array_chunk($alumnos, 5);

    // Mostrar los grupos
    $letras_grupos = ['A', 'B', 'C', 'D'];
    foreach ($grupos as $indice => $grupo) {
        echo "<h3>Grupo " . $letras_grupos[$indice] . "</h3>";
        echo "<ul>";
        foreach ($grupo as $alumno) {
            echo "<li>" . $alumno . "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>