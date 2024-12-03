<?php

require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$sqlCiudades = "SELECT * FROM ciudades";
$banderaCiudades = $conexion->prepare($sqlCiudades);
$banderaCiudades->execute();
$ciudades = $banderaCiudades->fetchAll();

 


$sqlGeneros = "SELECT * FROM generos";
$banderaGeneros = $conexion->prepare($sqlGeneros);
$banderaGeneros->execute();
$generos = $banderaGeneros->fetchAll();


$sqlLenguajes = "SELECT * FROM lenguajes";
$banderaLenguajes = $conexion->prepare($sqlLenguajes);
$banderaLenguajes->execute();
$lenguajes = $banderaLenguajes->fetchAll();





?>

<link rel="stylesheet" href="estilos.css">


<div class="contenedor">
<form action="controlador.php" method="post"  class="formulario">
    <h1 class="titulo">ENVIO FORMULARIO</h1>
    <div class="seleccion">
        <label for="id_ciudad">Ciudades</label>
        <select name="id_ciudad" id="id_ciudad" required>
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

    <div class="generos">
        <label class="titulo">Generos</label><br>
        <?php
        foreach ($generos as $key => $value){
        ?>
        <label for="gen_<?=$value['id_genero']?>" >            
            <input id="gen_<?=$value['id_genero']?>" type="radio" name="genero" value="<?=$value['id_genero']?>" required>
            <?=$value['genero']?>
        </label>
        <br>
        <?php
        }
        ?>
    </div>

    
    <div class="entradas">
    
    <div class="entradas__textos">
    <label for="nombre"  >Nombre</label>
    <input type="text" name="nombre" id="nombre" pattern="^[a-zA-Z]{2,}$" required >
     
    </div>
    
    <div class="entradas__textos">
    <label for="apellido"  >Apellido</label>
    <input type="text" name="apellido" id="apellido"  pattern="^[a-zA-Z]{4,}$" required >
    </div>
    
    <div class="entradas__textos">
    <label for="correo" class="entradas__titulo" >Correo</label>
    <input type="text" name="correo" id="correo"  required>
    </div>

<div class="entradas__textos">
    <label for="fecha" >Fecha Nacimiento</label>
    <input type="date" name="fecha" id="fecha" max="<?=date('Y')?>-<?=date('m')?>-<?=date('d')?>"    required>
</div>
    </div>

    <div class="lenguajes__contenedor">
        <label>Lenguajes</label><br>
        <?php
        foreach ($lenguajes as $key => $value){
        ?>
        <label for="lenguaje_<?=$value['id_lenguaje']?>">            
            <input id="lenguaje_<?=$value['id_lenguaje']?>" type="checkbox" name="lenguaje[]" value="<?=$value['id_lenguaje']?>" >
            <?=$value['lenguaje']?>
        </label>
        <br>
        <?php
        }
        ?>
    </div>
   
    <div class="button">
    <input type="submit" class="button__link">
    </div>
</form>
</div>