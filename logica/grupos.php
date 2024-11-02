<?php



   
//si los alumnos de un grupo divido en a y b de acuerdo con el sexo y el nombre  el grupo esta formado
//por nombre anterior a la M y los hombres posterior a la N y el grupo b por el Resto escribir un programa que pida el nombre y el sexo al usuario y muestre por pantalla el grupo 


function idGrupo($sexo , $nombre){
     

     if($sexo == "mujer" && strtolower($nombre[0]) < "m" || $sexo == "hombre" && strtolower($nombre[0]) > "n"){
        
      
      return "Usted es el grupo a";
     }else{

      return "Usted es el grupo b";
     }
     
 

}

$resultado = idGrupo("mujer","sanuela");

echo $resultado






?>