<?php
/**
 * Estructura condicional doble (if else)
 * 
 * 
 * if(Expresion){
 *   Codigo a ejecutar si la expresion es verdadera
 *  
 * }else{
 *   
 * codigo si es falsa 
 * 
 * }
 * 
 * if(Expresion):
 * si es verdadera
 * else:
 *  si es falsa
 *  enif; 
 */

 if(1 > 7){
   echo "Condicion evalua a verdades";

 }else{
    echo "Condicion evalua a falsa";
 }

 if(9 == 12 ):
    echo "Condicion evalua a verdadera";
 
else:
   
  echo "Condicion evalua a falsa";

endif;

/**Calcular el total que una persona debe pagar en un montallantas el precio de cada llanta es 800 y 700 si se compran 5  o mas llantas */

?>

<br>
<?php
$numeroLLantas = 6;

if($numeroLLantas >= 5 ){
  
  $precioLLanta = $numeroLLantas * 700; 
  echo "El precio total de las llantas es ".$precioLLanta;
  
}else {
  
  $precioLLanta = $numeroLLantas * 800;
  echo "El precio total de las llantas es".$precioLLanta;
  

}

?>

<br>

<?php



/** Determinar si un alumno aprueba o reprueba un curso sabiendo si aprobara si su promedio  es mayor a 3.0 caso contrario reprueba  */


$promedio = 3.5;

if($promedio >= 3.0){
    
  echo "Aprobo";
}else{
  
  echo "Reprobo";
} 


echo "<br>";

//(8>= 10) ? echo "verdadero": echo "es falso";


/**
 * 
 * Operador ternario 
 *   operador ? true : false;
 * 
 * 
 * 
 * 
 */


$num1 = 4;
$num2 = 3;

($num1 > $num2) ? $resultado = $num1 * $num2 : $resultado =  $num1 % $num2;


echo "resultado es ".$resultado;

?>