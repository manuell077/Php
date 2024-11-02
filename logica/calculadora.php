<?php

$a = 25;
$b = 0;
$resultado = [];


function operaciones($a,$b){
     try {
      
      if($b === 0 ){
         
        throw new Exception ("Division por cero");

      }
    
     $resultado = array(
         "sumar" => $a + $b,
         "multiplicar" => $a * $b,
         "dividir"  => $a / $b,
         "restar" => $a - $b


     );
     return $resultado;

    }catch (Exception $th) {
        return$th->getMessage();
    }
        
}

$resultado = operaciones($a,$b);

echo "<pre>";
print_r($resultado);
echo "</pre>";



?>
