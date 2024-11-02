<?php 

 $Texto = "manuelardila836@ gmail.com";
//  $exp = "/PRUEBA/i";
// $exp = "/[0-9]/";
// $exp = "/^texto/i";
// $exp = "/pr[eu]eba/i";

// $exp = "/[a-z]/";
// $exp = "/grupo~[0-9]~adso/";

// $exp = "/le{2,4}r/";

// $exp = "/le[aeiou]{1,4}r/i";


// $exp = "/[A-Za-z]/";

// $exp = "/[\d]/";

// $exp = "/[\D]/";

// $exp = "/[A-Z]{4,}/";

// $exp = "/([A-Z].[A-Z].[A-Z].[A-Z])|([0-9]{2,})|[A-Z]{4}|[]/";


 $exp = "/[\W\s]/";

// $exp = "/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/i";

$resultado = preg_match_all($exp,$Texto,$coincidencias,PREG_OFFSET_CAPTURE);

if($resultado){
    
  echo "Tiene CUATRO LETRAS MAYUSCULAS";
}else{

  echo "No TIENE CUATRO LETRAS MAYUSCULAS";
}


 echo "<pre>";
  print_r($coincidencias);
  echo "</pre>";

// echo $resultado;