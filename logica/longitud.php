<?php 



//cree una funcion que calcule la loongitud de una palabra si es corta o larga , las palabras cortas son menores a 5 caracteres  

function longitud($palabra){
     
  if(strlen($palabra) < 5){
      
    echo "Es una palabra corta";

  }else{
    
    echo "Es una palabra larga";

  }
    
}

longitud("ANA");


?>