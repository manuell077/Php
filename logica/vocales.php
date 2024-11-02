<?php

//Crea una funcion para calcular cuantas silabas tiene una palabra 

//ESCRIBA UNA FUNCION QUE TOME UNA CADENA Y DEVUELVA UNA NUEVA CADENA SIN LAS VOCALES
      
function reconocimientoVocales($cadena){
  $nuevaCadena = "";
  $vocales = ["a","e","i","o","u"];
  for($i = 0 ; $i < strlen($cadena) ; $i++){       
      if( in_array($cadena[$i], $vocales) !== true){        
                $nuevaCadena .= $cadena[$i];
     }
  }
  return $nuevaCadena;
}
$resultado = reconocimientoVocales("manuel");
print_r($resultado);
?>