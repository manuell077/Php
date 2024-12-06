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


    try{

    if(!preg_match("/^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/",$correo)){
       
        throw new  Exception("Correo Invalido ");
    }else{    

    $sql = "UPDATE usuarios SET nombres = :nombre,  apellidos = :apellido ,  correo = :correo , fecha_nacimiento = :fecha , id_genero = :genero_id , id_ciudad = :ciudad_id WHERE id_usuario = :id_usuario  ";
    $stm = $conexion->prepare($sql);
    $stm->bindParam(':nombre', $nombre);
    $stm->bindParam(':apellido', $apellido);
    $stm->bindParam(':correo', $correo);
    $stm->bindParam(':fecha', $fecha_nacimiento);
    $stm->bindParam(':genero_id', $genero_id);
    $stm->bindParam(':ciudad_id', $ciudad_id);
    $stm->bindParam(':id_usuario', $id_usuario);
    $stm->execute();



    $sqlEliminar = "DELETE FROM lenguaje_usuarios WHERE id_usuario  = :id_usuario";
    $sq = $conexion->prepare($sqlEliminar);
    $sq->bindParam(':id_usuario',$id_usuario);
    $sq->execute();




    $sqlLenguajes = "INSERT INTO lenguaje_usuarios(id_usuario,id_lenguaje) VALUES (:id_usuario,:id_lenguaje)";

    $prueba = $conexion->prepare($sqlLenguajes);
    foreach ($id_lenguaje as $key => $value) {
     
        $prueba ->bindParam(':id_usuario', $id_usuario);
        $prueba ->bindParam('id_lenguaje', $value);
        $prueba ->execute();
    }

    header('Location: vista.php');
}
}catch(Exception $e){


?>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="estilos.css">

<div class="error">
<h1 class="titulo">AUXILIO A OCURRIDO UN ERROR</h1>
<i class='error__icono bx bxs-error-circle'></i>
<h1 class="titulo"><?= $e->getMessage() ?></h1>
</div>

<?php
}  



?>    