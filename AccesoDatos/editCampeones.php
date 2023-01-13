<?php
include_once('conexion.php');

$id = $_POST['id'] ?? '';
$name = $_POST['name'] ?? '';
$rol = $_POST['rol'] ?? '';
$difficulty =  $_POST['difficulty'] ?? '';
$description = str_replace("'","",$_POST['description']) ?? '';

$roles = ['Asesino', 'Luchador', 'Mago', 'Tirador', 'Apoyo', 'Tanque'];
$dificultades = ['Baja', 'Media', 'Alta'];


if($id != '' && is_numeric($id) && is_string($name) && $name != '' && in_array($rol, $roles) && in_array($difficulty, $dificultades) && $description != '' && is_string($description)){

    $consulta = "UPDATE champ SET `name` = '$name', `rol` = '$rol', `difficulty` = '$difficulty', `description` = '$description' WHERE `id` = '$id' ;";
    $upload = mysqli_query(conectar(), $consulta);
    header('Location: 002campeones.php');

}else{
    echo '<script>alert("Se ha producido un error al realizar la actualización, inténtalo de nuevo.")</script>';
}
    

?>