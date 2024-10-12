<?php

/* 
* operadores incremento y decremento
*
* simbolo   nombre
* ++ incremento
* -- decremento
*
*
*Ejemplo
*
* ++$variable pre-incremento
* --$variable pre-decremento
*
*/

$numero = 10;

//Incrementa el valor en 1 antes de saber el valor de la variable
echo "Pre-incremento",++$numero;

echo"<br>";

//Primero toma el valor de la variable y despues se incrementa 
echo"Post incremento",$numero++;

echo "<br>";
echo $numero;

//Priemro realiza la resta y luego realiza la operacion

echo "<br>";
echo "Pre decremento". --$numero;

echo "<br>";


//
echo "Post decremento ", $numero--;

echo "<br>";
//10+ 1 = 11
$resultado = ++$numero;

echo $resultado;

echo "<br>";

$resultado = $numero++;
echo "Linea 51 ¿?".$resultado;