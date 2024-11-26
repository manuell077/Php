<?php 

require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$id_usuario  = $_GET['id'];

$sqlUsuario = "SELECT  u.id_usuario , u.nombres , u.apellidos , u.correo , u.fecha_nacimientio , u.id_genero , u.id_ciudad FROM usuarios u INNER JOIN generos g on u.id_genero = g.id_genero  INNER JOIN ciudades c on u.id_ciudad = c.id_ciudad ";
$banderaUsuario = $conexion->prepare($sqlUsuario);
$banderaUsuario->execute();
$usuarios = $banderaUsuario->fetchAll();

$sqlCiudades = "SELECT * FROM ciudades  ";
$banderaCiudades = $conexion->prepare($sqlCiudades);
$banderaCiudades->execute();
$ciudades = $banderaCiudades->fetchAll();


$sqlCiudadSeleccioanda = "SELECT * FROM ciudades c INNER JOIN  usuarios u on c.id_ciudad = u.id_ciudad WHERE u.id_usuario = $id_usuario  ";
$banderaCiudadSeleccionada = $conexion->prepare($sqlCiudadSeleccioanda);
$banderaCiudadSeleccionada->execute();
$ciudadSeleccionada = $banderaCiudadSeleccionada->fetchAll();

$sqlGeneros = "SELECT * FROM generos ";
$banderaGeneros = $conexion->prepare($sqlGeneros);
$banderaGeneros->execute();
$generos = $banderaGeneros->fetchAll();

$sqlGeneroSeleccionado = "SELECT * FROM generos g INNER JOIN usuarios u on g.id_genero = u.id_genero WHERE u.id_usuario = $id_usuario  ";
$banderaGeneroSeleccionado = $conexion->prepare($sqlGeneroSeleccionado);
$banderaGeneroSeleccionado->execute();
$generoSeleccionado = $banderaGeneroSeleccionado->fetchAll();

$sqlDatosUsuario = "SELECT * FROM usuarios WHERE id_usuario = $id_usuario ";
$banderaDatosUsuario = $conexion->prepare($sqlDatosUsuario);
$banderaDatosUsuario -> execute();
$datos = $banderaDatosUsuario->fetchAll();


$sqlLenguajes = "SELECT * FROM lenguajes";
$banderaLenguajes = $conexion->prepare($sqlLenguajes);
$banderaLenguajes->execute();
$lenguajes = $banderaLenguajes->fetchAll();

$sqlLenguajeSeleccion = "SELECT * FROM lenguajes l INNER JOIN  lenguaje_usuario lu on l.id_lenguaje = lu.id_lenguaje WHERE lu.id_usuario = $id_usuario";
$banderaLenguajesSeleccion = $conexion->prepare($sqlLenguajeSeleccion);
$banderaLenguajesSeleccion->execute();
$lenguajeSeleccionados = $banderaLenguajesSeleccion->fetchAll();



?>





<form action="update.php" method="post" >
    <div>
        <label for="id_ciudad">Ciudades</label>
        <select name="id_ciudad" id="id_ciudad">
            <?php foreach ($ciudades as $key => $value)

            {  foreach ($ciudadSeleccionada as $key => $seleccion) {
                
            ?>
                <option id="<?=$value['id_ciudad']?>" value="<?=$value['id_ciudad']  ?> 
                " <?= $value['ciudad'] == $seleccion['ciudad']  ? 'selected' : '' ?>>
                
                    <?=$value['ciudad']?>
                </option>
                <?php
            }
            }?>
        </select>
    </div>

    <div>
        <label>Generos</label><br>
        <?php
        foreach ($generos as $key => $value){
            foreach ($generoSeleccionado as $key => $seleccion) {
                
            
        ?>
        <label for="gen_<?=$value['id_genero']?>">            
            <input id="gen_<?=$value['id_genero']?>" type="radio" name="genero" value="<?=$value['id_genero']?>" <?= $value['genero'] == $seleccion['genero'] ? 'checked' : '' ?>>
            <?=$value['genero'] ?> 
        </label>
        <br>
        <?php
            }
        }
        ?>
    </div>

    <input type="hidden" name="id" value="<?= $id_usuario?>">
   
    <label for="nombre">Nombre</label>
    <?php foreach ($datos as $key => $valor) {
        
     ?>
    <input type="text" name="nombre" id="nombre" value="<?= $valor['nombres']  ?>">
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido" value="<?= $valor['apellidos']  ?>" >
    <label for="correo">Correo</label>
    <input type="text" name="correo" id="correo" value="<?=$valor['correo'] ?>">
    <label for="fecha">Fecha Nacimiento</label>
    <input type="date" name="fecha" id="fecha" value="<?=$valor['fecha_nacimientio'] ?>">
    <?php  } ?>
    <div>
        <label>Lenguajes</label><br>
        <?php
        foreach ($lenguajes as $key => $value){
            
                
            
                
        ?>
        <label for="lenguaje_<?=$value['id_lenguaje']?>">            
            <input id="lenguaje_<?=$value['id_lenguaje']?>" type="checkbox" name="lenguaje[]" value="<?=$value['id_lenguaje']?>"  
            
            <?php
            foreach ($lenguajeSeleccionados as $key => $contenido) {
                if($value['id_lenguaje'] == $contenido['id_lenguaje']){
                    ?>
                    checked
                    <?php
                }


            

            }
             ?>

        >

            <?=$value['lenguaje']?>
        </label>
        <br>
        <?php
            
        }
        ?>
    </div>


    
      
    <input type="submit">

    </form>