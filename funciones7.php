<?php
/* Se necesita un programa que me permita ingresar un texto (textarea) y una palabra a buscar.
Al presionar el boton “buscar palabra” se debe disparar una función que busque en el texto ingresado cuantas
veces se repite la palabra buscada. El programa debe devolver el texto con la palabra buscada en negrita y
debajo del texto debe decirme "la palabra ... se repite ... veces en el texto"
*/

//AYUDA CON CHAT GPT
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Buscar Palabra</title>
</head>
<body>
    <h2>Buscador de Palabras</h2>

    <form method="post">
        <label>Texto:</label><br>
        <textarea name="texto" rows="6" cols="50"></textarea><br><br>

        <label>Palabra a buscar:</label><br>
        <input type="text" name="palabra"><br><br>

        <input type="submit" value="Buscar palabra">
    </form>

<?php
function buscarPalabra($texto, $palabra) {
    // Contar solo la palabra exacta, sin importar mayúsculas (i) 
    //AYUDA CON CHAT GPT
    $veces = preg_match_all("/\b" . preg_quote($palabra, '/') . "\b/i", $texto);
    //AYUDA CON CHATGPT
    // Resaltar solo la palabra exacta
    $resaltado = preg_replace("/\b(" . preg_quote($palabra, '/') . ")\b/i", "<strong>$1</strong>", $texto);

    // Resultado completo
    $resultado  = "<p><strong>Texto procesado:</strong></p>";
    $resultado .= "<p>$resaltado</p>";
    $resultado .= "<p>La palabra <strong>$palabra</strong> se repite <strong>$veces</strong> veces en el texto.</p>";

    return $resultado;
}


    if (isset($_POST["texto"]) && isset($_POST["palabra"])) {
        $texto = $_POST["texto"];
        $palabra = $_POST["palabra"];

        if ($texto !== "" && $palabra !== "") {
            echo buscarPalabra($texto, $palabra);
        } else {
            echo "<p>Por favor ingrese el texto y la palabra a buscar.</p>";
        }
    }
    ?>
</body>
</html>
