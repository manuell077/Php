<?php 

require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$sqlUsuario = "SELECT * FROM usuarios";
$banderaUsuario = $conexion->prepare($sqlUsuario);
$banderaUsuario->execute();
$usuarios = $banderaUsuario->fetchAll();

foreach ($usuarios as $key => $value) {
    echo implode(" ",$value)."<br>";
}


?>

