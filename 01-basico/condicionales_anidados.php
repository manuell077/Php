<?php

/**
 * 
 * 
 * Estructura
 * if(?){
 *   if(?){
 *      codigo a ejecutar
 * }else{
 *   codigo a ejecutar
 * }
 * 
 * }
 * 
 * 
 */

$a = 2;
$b = 3;
$c = 10;

 if($a > $b && $a  > $c){
     
  echo "El numero mayor es ".$a;

 }if($b > $a && $b > $c){
     echo "El numero mayr es ".$b;
 }if($c > $a && $c > $b ){
    
     echo "El numero mayor es ".$c;
 }else{
   echo "Todos los numeros son iguales";
 }


 $diaNumero = 2;

 if($diaNumero == 1){
    
    echo "lunes";

 }elseif($diaNumero == 2){
   
    echo "martes";

 }elseif($diaNumero == 3){
   
     echo "miercoles";
 }elseif($diaNumero == 4){
    echo "jueves";
 }elseif($diaNumero == 5){
     echo "viernes";
 }elseif($diaNumero == 6){
     echo "sabado";
 }elseif($diaNumero == 7){
     echo "Domingo"; 
 }
