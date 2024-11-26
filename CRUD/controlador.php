<?php 

    require ('conexion.php');
    $db = new Conexion();
    $conexion = $db->getConexion();
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $fecha_nacimiento = $_POST['fecha'];
    $genero_id = $_POST['genero'];
    $ciudad_id = $_POST['id_ciudad'];
    $id_lenguaje = $_POST['lenguaje'];

    $sql = "INSERT INTO usuarios (nombres,apellidos,correo,fecha_nacimiento,id_genero,id_ciudad) VALUES (:nombre,:apellido,:correo,:fecha,:genero_id,:ciudad_id)";
    $stm = $conexion->prepare($sql);
    $stm->bindParam(':nombre', $nombre);
    $stm->bindParam(':apellido', $apellido);
    $stm->bindParam(':correo', $correo);
    $stm->bindParam(':fecha', $fecha_nacimiento);
    $stm->bindParam(':genero_id', $genero_id);
    $stm->bindParam(':ciudad_id', $ciudad_id);
    $stm->execute();

    
   $id_usuario = $conexion->lastInsertId();


   $sqlLenguajes = "INSERT INTO lenguaje_usuarios (id_usuario,id_lenguaje) VALUES (:id_usuario,:id_lenguaje)";

   $prueba = $conexion->prepare($sqlLenguajes);
   foreach ($id_lenguaje as $key => $value) {
    
       $prueba ->bindParam(':id_usuario', $id_usuario);
       $prueba ->bindParam('id_lenguaje', $value);
       $prueba ->execute();
   }

?>