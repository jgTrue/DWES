<?php
    include_once('conexion.php');

    $id = $_GET['action'];

    if($id != null){
        
        $consulta = "DELETE FROM champ WHERE `id` = '$id';";
        $upload = mysqli_query(conectar(), $consulta);
        header('Location: 002campeones.php');
    }else{
        echo '<script>alert("Se ha producido un error al realizar el borrado, inténtalo de nuevo.")</script>';
    }

?>