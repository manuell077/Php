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

echo "<pre>";
print_r($generos);
echo "</pre>";

?>

<form action="" method="post">
    <div>
        <label for="id_ciudad">Ciudades</label>
        <select name="id_ciudad" id="id_ciudad">
            <?php foreach ($ciudades as $key => $value)
            {?>
                <option id="<?=$value['id_ciudad']?>">
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
            <input id="gen_<?=$value['id_genero']?>" type="radio" name="genero">
            <?=$value['genero']?>
        </label>
        <br>
        <?php
        }
        ?>
    </div>


</form>