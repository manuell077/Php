<?php

//En una farmacia aplica al precio de los remedios el 10% del descuento hacer un programa que ingresando el costo de los medicamentos 


function precioDescuento($precio){
     
      $descuento = $precio * 0.1;

      $valorFinalMedicamento = $precio - $descuento;

      return $valorFinalMedicamento;
}

function compraMedicamentos(){
      
     $producto = 4000;
     $producto2 = 8000;
     $producto3 = 4000; 

     $sumaFinal = $producto + $producto2 + $producto3;
    $resultado = precioDescuento($sumaFinal);

    return $resultado;
}
  
$resul = compraMedicamentos();

echo $resul;


?>