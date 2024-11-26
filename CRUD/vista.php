<?php 

require('conexion.php');

$db = new Conexion();
$conexion = $db->getConexion();

$sqlUsuario = "SELECT  u.id_usuario , u.nombres , u.apellidos , u.correo , u.fecha_nacimientio , u.id_genero , u.id_ciudad FROM usuarios u INNER JOIN generos g on u.id_genero = g.id_genero  INNER JOIN ciudades c on u.id_ciudad = c.id_ciudad";
$banderaUsuario = $conexion->prepare($sqlUsuario);
$banderaUsuario->execute();
$usuarios = $banderaUsuario->fetchAll();

?>


<table border="1">
     
<tr>
   <th>id_usuario</th>
   <th>nombres</th>
   <th>apellidos</th>
   <th>correo</th>
   <th>fecha_nacimiento</th>
   <th>Genero</th>
   <th>Ciudad</th>
   


</tr>


   
         <?php foreach ($usuarios as $key => $value) {
            ?>
         
         <tr> 
         <td><?= $value['id_usuario'] ?></td>
         <td><?= $value['nombres'] ?></td>
         <td><?= $value['apellidos'] ?></td>
         <td><?= $value['correo'] ?></td>
         <td><?= $value['fecha_nacimientio'] ?></td>
         <td><?= $value['id_genero'] ?></td>
         <td><?= $value['id_ciudad'] ?></td>
         <td><button><a href="editar.php?id=<?= $value['id_usuario']?>">Editar</a></button></td>
         <td><button><a href="eliminar.php?id=<?= $value['id_usuario'] ?>">Eliminar</a></button></td>
         </tr> 
         <?php 
         }
         ?>
    





</table>
 







