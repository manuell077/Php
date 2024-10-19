<?php

$a = 2;
$numero = 9;


// while($a <= 10){
//   $a++;  
//   if($numero % $a  <> 0 ){
      
    
//   }else {
//     break;
//   }

//   echo "$numero x $a = ", $numero * $a . "<br>";
     
  // if($a == 8){
    
  //   continue;
  // }
  

  

    
// }

function esPrimo ($numero){
    
    $a = 2;
    $primo = true;

   while($a < $numero/2 && $primo ){

        if($numero % $a == 0 ){
            
          $primo = false; 
          break;
          
                
        }

        $a++;

        

       
    }
    return $primo;
    


}

$primo = esPrimo(3)? "Si": "No" ;

echo $primo;