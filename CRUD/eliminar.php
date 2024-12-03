<?php
   
   $id_usuario  = $_GET['id'];
   
   require ('conexion.php');
   $db = new Conexion();
   $conexion = $db->getConexion();
   



   $sqlEliminar = "DELETE FROM lenguaje_usuarios WHERE id_usuario  = :id_usuario";
    $sq = $conexion->prepare($sqlEliminar);
    $sq->bindParam(':id_usuario',$id_usuario);
    $sq->execute();


    $sqlElimUsuario = "DELETE FROM usuarios WHERE  id_usuario = :id_usuario";
    $sqe = $conexion->prepare($sqlElimUsuario);
    $sqe->bindParam(':id_usuario', $id_usuario);
    $sqe->execute();

    header('Location:  vista.php');



?>