<?php

/**
 * Estructura condicional simple
 * 
 * 
 * if(expresion){
 *    codigo a ejecutar
 * 
 * }
 * 
 * 
 * if(expresion):
 * 
 *   codigo a ejecutar 
 * 
 * endif;
 * 
 *  */


$edad = 18;
$saludo = "hola";

echo "La persona es mayor de edad? ";

if($edad >= 18){
   
   echo "Hola eres mayor de edad !!!";

}

echo "<br>";
?>

<div>
  <?php if($edad >= 18): ?>
   <h1><?= $saludo ?></h1>

  <?php endif; ?>
    
  

</div>

<?php 
/** Realize un programa donde se pida un numero , y si el numero es par debe aparecer un mensaje  que es par  */
 

$numero = 2;


if($numero  % 2 == 0){

    echo "El numero es par ";
}

/** En un almacen se hace el 20% de descuento de los clientes cuya compra supera los 100 dolares cual sera la cantidad que pagara una persona por su compra */


$compra = 200;

if($compra > 100){

  $valorDescuento = $compra * 0.2;
  $compra =  $compra - $valorDescuento;
  echo "El valor del descuento es ".$compra; 
}


if






