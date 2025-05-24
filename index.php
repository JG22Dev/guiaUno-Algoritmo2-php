<?php   

/*
GUIA de ejercicios en PHP Hecha por la profesora Paula Giaimo Realizado por el estudiante Javier Gomez

Primera Parte:
1) Crear un programa que me permita ingresar 1 numero y me diga si es par o impar.
2) Escribir un programa que muestre los numeros del 1 al 150.
3) Crear un programa que muestre los numeros del 150 al 0.
4) Escribir un programa que solo me permita ingresar un numero positivo y me muestre todos los numeros que le
anteceden desde el 1.
5) Crear un programa que me permita ingresar 5 numeros y me muestre su promedio.
6) Escribir el programa que me permita ingresar 2 numeros y elegir la operación a realizar (suma, resta,
multiplicacion, division) y me muestre el resultado de la misma.
7) Crear un programa que me permita ingresar 2 numeros, los reste y que me muestre el resultado y me diga si el
numero obtenido es positivo o negativo.
8) Escribir el programa para que calcule el cuadrado de un numero, y en caso de ingresar un numero negativo me
muestre “Debe ingresar un nùmero mayor a cero”
9) Crear un programa que sume todos los enteros desde el 1, siempre que la suma no supere 1500. Mostrar por
pantalla cuantos números se sumaron y el resultado obtenido.
10) Ingresar 5 numeros a traves de un formulario y que me diga cual es el mayor y cual el menor.
11) Crear un programa que me permita ingresar 10 numeros a traves de un formulario. Al enviarlos me debe
mostrar:

a) Cuantos de los numeros son positivos y cuantos negativos
b) Cuantos son pares
c) Cuantos son mayores a 10 y menores a 90
d) Cual es la suma total de los numeros ingresados

12) Crear una aplicación que dados 3 numeros enteros ($a $b y $c) diga cual tiene el valor del medio, y en el caso
que no exitiera me lo informe por pantalla.
Ejemplos:
$a=10; $b=5; $c=1; muestra “el valor del medio es b=5”
$a=10; $b=5; $c=10; muestra “no existe valor del medio”


13) Ingresar 5 numeros en un formulario (utilizar un bucle para cargar los inputs). Pasar los valores del array a 5
variables individuales, $a, $b, $c, $d, $e (utillizando list). Luego mostrarlas
Ejemplo: Numeros ingresados 1,2,3,4,5
Debe mostrar:
La variable a vale= 1, la variable b vale 2, la variable c vale 3, la variable d vale 4 y la variable e vale 5
14) Crear un programa que al presionar un botón me muestre la fecha y hora actual en español.
Ejemplo: Hoy es Lunes 8 de Abril de 2024, son las 12:35
15) Crear un temporizador. Debe tener dos botones:
a. Iniciar que imprimirá en pantalla la hora actual.
b. Finalizar(solo debe ser visible cuando se haya iniciado el temporizador)Que imprimirá en pantalla el
tiempo transcurrido

16) Crear un programa que me permita ingresar día, mes y año. (3 inputs) Validar si la fecha ingresada es correcta,
sino que me pida reingresar (ej: 31/2/2022). Además que calcule cuantos días faltan o cuantos días pasaron
desde la fecha actual y me lo informe por pantalla, debajo del formulario de ingreso.

Ejercicios con funciones:
(Nota: En todos los casos debe existir un programa que me permita implementar la función)

1) EDAD: Crear una función calcularEdad que reciba una fecha de nacimiento y devuelva la edad actual de la
persona.
2) SALUDAR: Crear una función que reciba el nombre y apellido de una persona y devuelva el mensaje “Hola ... ....
¿Cómo estás?
3) NOTA: Crear una función que reciba 3 notas de un alumno, calcule su promedio y devuelva si el alumno está
aprobado, desaprobado o aplazado. (se aprueba con 7, se aplaza si es menor a 4)
4) DIA: Crear una función que reciba un numero entero y me diga que día de la semana es, si el número no está
entre 1 y 7 que me diga que el día no existe.
5) Crear un programa que pueda calcular suma, resta, multiplicación y división entre 2 números. El programa debe
tener un formulario para poder ingresar los números y la operación. Crear una función calculadora que reciba
como parámetro los 3 valores y devuelva el resultado.
Ejemplo: calculadora(2,+,2)


6) Crear una función calcularSueldo que reciba como parámetros el sueldo bruto, antigüedad y cantidad de hijos y
me devuelva el recibo de sueldo de la persona teniendo en cuenta que si su antigüedad es mayor a 5 años el
sueldo se incrementa 10%, si es mayor a 10 años se incrementa en 20%, por cada hijo cobrará 1000 pesos extra.
EL recibo de sueldo debe ser:
Sueldo bruto: $....
Antigüedad ... años: $....
... hijos: $...
Total a cobrar: $.....

7) Se necesita un programa que me permita ingresar un texto (textarea) y una palabra a buscar.
Al presionar el boton “buscar palabra” se debe disparar una función que busque en el texto ingresado cuantas
veces se repite la palabra buscada. El programa debe devolver el texto con la palabra buscada en negrita y
debajo del texto debe decirme "la palabra ... se repite ... veces en el texto"
8) Crear un programa que me permita ingresar una fecha (input date) y me diga que estación del año es.
Debe crearse una funcion calcularEstacion() que reciba como parametro la fecha y devuelva "primavera, verano,
otoño, invierno".
9) Crear una funcion validarPalabra que permita que ingresen palabras de entre 5 y 10 caracteres.
La funcion dara 1 si la palabra es valida, y 0 si es inválida.
Crear un formulario para ingresar una palabra y utilizando la función me diga si la palabra es valida o no
10) Crear un programa que al ingresar un número entero y apretar el botón 'Mostrar Tabla' me muestre la tabla de
multiplicar del número ingresado. Utilizar una funcion "mostrarTabla()”.

*/