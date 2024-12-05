<?php 

require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$sqlUsuario = "SELECT  u.id_usuario , u.nombres , u.apellidos , u.correo , u.fecha_nacimiento , u.id_genero , u.id_ciudad FROM usuarios u INNER JOIN generos g on u.id_genero = g.id_genero  INNER JOIN ciudades c on u.id_ciudad = c.id_ciudad";
$banderaUsuario = $conexion->prepare($sqlUsuario);
$banderaUsuario->execute();
$usuarios = $banderaUsuario->fetchAll();

?>

<link rel="stylesheet" href="estilos.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


<div class="fondo">
<div class="contenedorTabla">   
<table class="tabla">
     


<h1 class="Titulo__usuarios">Tabla de usuarios</h1>

<tr>
   <th class="tabla__columnas">id_usuario</th>
   <th class="tabla__columnas">nombres</th>
   <th class="tabla__columnas">apellidos</th>
   <th class="tabla__columnas">correo</th>
   <th class="tabla__columnas">fecha_nacimiento</th>
   <th class="tabla__columnas">Genero</th>
   <th class="tabla__columnas">Ciudad</th>
   <th class="tabla__columnas">Editar</th>
   <th class="tabla__columnas">Eliminar</th>
   


</tr>


   
         <?php foreach ($usuarios as $key => $value) {
            ?>
         
         <tr> 
         <td class="tabla__filas"><?= $value['id_usuario'] ?></td>
         <td class="tabla__filas"><?= $value['nombres'] ?></td>
         <td class="tabla__filas"><?= $value['apellidos'] ?></td>
         <td class="tabla__filas"><?= $value['correo'] ?></td>
         <td class="tabla__filas"><?= $value['fecha_nacimiento'] ?></td>
         <td class="tabla__filas"><?= $value['id_genero'] ?></td>
         <td class="tabla__filas"><?= $value['id_ciudad'] ?></td>
         <td class="tabla__filas"><button><a href="editar.php?id=<?= $value['id_usuario']?>"><i class='bx bx-pencil icono' ></i></a></button></td>
         <td class="tabla__filas"><button><a href="eliminar.php?id=<?= $value['id_usuario'] ?>"><i class='icono bx bxs-trash' ></i></a></button></td>
         </tr> 
         <?php 
         }
         ?>
    





</table>
</div>
</div>







