<?php
session_start();

// Inicializar variables
$suma = 0;
$numeros_sumados = 0;

// Iterar sobre los enteros desde 1 hasta que la suma alcance o supere 1500
for ($i = 1; $suma < 1500; $i++) {
    $suma += $i;
    $numeros_sumados++;
}

// Mostrar resultados por pantalla
echo "Cantidad de números sumados: " . $numeros_sumados . "<br>";
echo "Resultado obtenido: " . $suma;
?>
