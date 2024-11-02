<?php 

//Tabla multiplicar 



function multiplicarTablas($numero){
       
   for($i = 0 ; $i < 10 ; $i++ ){
       
      echo "$numero"."*"."$i".$numero * $i."<br>";
   }
    

}

multiplicarTablas(5);



?>