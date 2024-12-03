<?php 
    
    require ('conexion.php');
    $db = new Conexion();
    $conexion = $db->getConexion();
    

    $id_usuario  = $_REQUEST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $fecha_nacimiento = $_POST['fecha'];
    $genero_id = $_POST['genero'];
    $ciudad_id = $_POST['id_ciudad'];
    $id_lenguaje = $_POST['lenguaje'];

    $sql = "UPDATE usuarios SET nombres = :nombre,  apellidos = :apellido ,  correo = :correo , fecha_nacimientio = :fecha , id_genero = :genero_id , id_ciudad = :ciudad_id WHERE id_usuario = :id_usuario  ";
    $stm = $conexion->prepare($sql);
    $stm->bindParam(':nombre', $nombre);
    $stm->bindParam(':apellido', $apellido);
    $stm->bindParam(':correo', $correo);
    $stm->bindParam(':fecha', $fecha_nacimiento);
    $stm->bindParam(':genero_id', $genero_id);
    $stm->bindParam(':ciudad_id', $ciudad_id);
    $stm->bindParam(':id_usuario', $id_usuario);
    $stm->execute();



    $sqlEliminar = "DELETE FROM lenguaje_usuario WHERE id_usuario  = :id_usuario";
    $sq = $conexion->prepare($sqlEliminar);
    $sq->bindParam(':id_usuario',$id_usuario);
    $sq->execute();




    $sqlLenguajes = "INSERT INTO lenguaje_usuario(id_usuario,id_lenguaje) VALUES (:id_usuario,:id_lenguaje)";

    $prueba = $conexion->prepare($sqlLenguajes);
    foreach ($id_lenguaje as $key => $value) {
     
        $prueba ->bindParam(':id_usuario', $id_usuario);
        $prueba ->bindParam('id_lenguaje', $value);
        $prueba ->execute();
    }




?>    