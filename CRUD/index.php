<?php

require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$sqlCiudades = "SELECT * FROM ciudades";
$banderaCiudades = $conexion->prepare($sqlCiudades);
$banderaCiudades->execute();
$ciudades = $banderaCiudades->fetchAll();

echo "<pre>";
print_r($ciudades);
echo "</pre>";


$sqlGeneros = "SELECT * FROM generos";
$banderaGeneros = $conexion->prepare($sqlGeneros);
$banderaGeneros->execute();
$generos = $banderaGeneros->fetchAll();


$sqlLenguajes = "SELECT * FROM lenguajes";
$banderaLenguajes = $conexion->prepare($sqlLenguajes);
$banderaLenguajes->execute();
$lenguajes = $banderaLenguajes->fetchAll();



echo "<pre>";
print_r($generos);
echo "</pre>";

?>

<form action="controlador.php" method="post" >
    <div>
        <label for="id_ciudad">Ciudades</label>
        <select name="id_ciudad" id="id_ciudad">
            <?php foreach ($ciudades as $key => $value)
            {?>
                <option id="<?=$value['id_ciudad']?>" value="<?=$value['id_ciudad']?>
                ">
                    <?=$value['ciudad']?>
                </option>
                <?php
            }?>
        </select>
    </div>

    <div>
        <label>Generos</label><br>
        <?php
        foreach ($generos as $key => $value){
        ?>
        <label for="gen_<?=$value['id_genero']?>">            
            <input id="gen_<?=$value['id_genero']?>" type="radio" name="genero" value="<?=$value['id_genero']?>">
            <?=$value['genero']?>
        </label>
        <br>
        <?php
        }
        ?>
    </div>


   
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido">

    <label for="correo">Correo</label>
    <input type="text" name="correo" id="correo">

    <label for="fecha">Fecha Nacimiento</label>
    <input type="date" name="fecha" id="fecha">

    <div>
        <label>Lenguajes</label><br>
        <?php
        foreach ($lenguajes as $key => $value){
        ?>
        <label for="lenguaje_<?=$value['id_lenguaje']?>">            
            <input id="lenguaje_<?=$value['id_lenguaje']?>" type="checkbox" name="lenguaje[]" value="<?=$value['id_lenguaje']?>">
            <?=$value['lenguaje']?>
        </label>
        <br>
        <?php
        }
        ?>
    </div>


    
      
    <input type="submit">
</form>